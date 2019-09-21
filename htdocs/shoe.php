<?php

// include the header
require 'header.php';

// include all necessary functions
require 'functions.php';

// if there is no id in the url, refuse the request
if( !isset( $_GET['id'] ) )
die( 'No shoe id' );

// get the info for this shoe from the database
$query = 'SELECT * FROM "shoes" INNER JOIN "brands" USING("brand_id") WHERE "shoe_id" = :shoe LIMIT 1';
$result = $db->prepare( $query );
$result->bindValue( ':shoe', $_GET['id'] );
$result->execute();
$shoe = $result->fetch();

// if the shoe isnt there then print an error
if($shoe === false)
die('Error. No shoe found');

// make the title of the web page the shoe name
$title = $shoe->shoe_title;

// prepare and execute a query that figures out the ratings and the reviews to be averaged/counted
$ratings = $db->prepare( 'SELECT AVG("rating_value") AS "avg" FROM "ratings" WHERE "shoe_id" = :shoe');
$ratings->bindValue( ':shoe', $shoe->shoe_id );
$ratings-> execute();
$avg_ratings = $ratings->fetch();

//prepare the reviews
$reviews = $db->prepare( 'SELECT * FROM "reviews" INNER JOIN "users" USING("user_id") WHERE "shoe_id" = :shoe ORDER BY "review_date" DESC');
$reviews->bindValue( ':shoe', $shoe->shoe_id );
$reviews-> execute();

//display the shoe brand, name, and image
echo '<div class="', $shoe->brand_name, '" align="center"><h3>', $shoe->brand_name,': ', $shoe->shoe_title,'</h3><p> <img src="images/',$shoe->shoe_image,'" alt="', $shoe->shoe_title,'" style="width:400px; height:300px;"><p> Rating: ',$avg_ratings->avg,'/10</p>';


// if they are signed in...
if(isset($_SESSION['signedin']) && $_SESSION['signedin'] == true) {
	// check to see if the user already left a rating
	$user_rating = 'SELECT COUNT(*) AS \'count\' FROM "ratings" WHERE "user_id" = :userid AND "shoe_id" = :shoeid';
	$rating_check = $db->prepare($user_rating);
	$rating_check->bindValue(':userid', $id);
	$rating_check->bindValue(':shoeid', $shoe->shoe_id);
	$rating_check->execute();

	//if they are signed in and the user has already left a rating
	if($rating_check->fetch()->count !== '0') {

		// tell them that they have already left a rating
		echo 'You have already left a rating. But you can change it.';

	}
	//if they are signed in and they haven't yet left a rating then prompt them to leave a rating
	else {

	//prompt them to leave a rating
		echo 'Leave a rating!';

	}

	// create a select box with 10 values for the user to use to rate the shoe out of 10
	echo '<form action="rate.php" method="post">', PHP_EOL;
		echo '<input type="hidden" name="shoe" value="', $shoe->shoe_id, '">', PHP_EOL;
		echo '<p> What would you rate this heat?</p><p><select name="rate">', PHP_EOL;

	echo '<option value="1">1</option> <option value="2">2</option> <option value="3">3</option> <option value="4">4</option> <option value="5">5</option> <option value="6">6</option> <option value="7">7</option> <option value="8">8</option> <option value="9">9</option> <option value="10">10</option>', PHP_EOL;

	echo '</select></p><input type="submit" value="Enter"></form>';
}
//if they arent signed in prompt them to sign in so they can rate the shoe
else {
	echo' You must be signed in to rate shoes. Sign in <a href="signin.php">here</a>.';
}
	//link them to a website where they can buy the shoe
	echo '<p> <a href="', $shoe->shoe_link, '"> Buy Now! </a></p></div>';

	//display the title reviews
	echo '<h4> Reviews </h4> <hr>';

//show all the current reviews if there are any, if not tell them they can ve the first person to review this shoe
if( $reviews === NULL) {

	echo 'No one has checked out this heat yet! Be the first!', PHP_EOL;

	//if they aren't signed in
	if(isset($_SESSION['signedin']) && $_SESSION['signedin'] !== true) {

		//prompt them to sign in
		echo 'You must be signed in to review this heat. Sign in <a href="signin.php">here</a>.';

	}
}
// otherwise display the latest reviews in chronological order
else {

	// for each comment
	while(($review = $reviews->fetch()) !== false ) {

		// print the comment and who said it nd when they said it.
		echo '<h5>', $review->user_username, ' said on ', date( 'F j, Y, \a\t g:i A', strtotime( $review->review_date )), ': </h5><p> ', $review->review_content, '</p><hr style="border-top: dotted 1px;">', PHP_EOL;

	}
}


// if they are logged in leave space for them to leave a review
if( isset($_SESSION['signedin']) && $_SESSION['signedin'] === true) {

		// check to see if the user already left a review
	$user_review = 'SELECT COUNT(*) AS \'count\' FROM "reviews" WHERE "user_id" = :userid AND "shoe_id" = :shoeid';
	$review_check = $db->prepare($user_review);
	$review_check->bindValue(':userid', $id);
	$review_check->bindValue(':shoeid', $shoe->shoe_id);
	$review_check->execute();

		//if they are signed in and the user has already left a review
	if($review_check->fetch()->count !== '0') {

		// tell them that they have already left a rating
		echo 'You have already left a review. But you can change it.';

	}
	//if they are signed in but they have not already left a review
	else {

		//propmt them to leave a review
		echo '<p style="colour:2E2D2A;"> Leave a Review:</p>';

	}
	// show them a form for leaving a review
	echo '<form action="review.php" method="post">', PHP_EOL;
	echo '<input type="hidden" name="shoe" value="', $shoe->shoe_id, '">', PHP_EOL;
	echo '<p><textarea name="review" cols="80" rows="4"></textarea></p>', PHP_EOL;
	echo '<p><input type="submit" value="Review"></p>', PHP_EOL;
	echo '</form>', PHP_EOL;

}
// if they aren't logged in then tell them to log in in order to review
else {

	echo 'You must be logged on to post a review. Sign in <a href="signin.php">here</a>.';

}

//include the footer of the page
require 'footer.php';

?>