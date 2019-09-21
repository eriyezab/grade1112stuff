<?php

$title = 'Register';

require 'header.php';

require 'functions.php';

if( $_SERVER['REQUEST_METHOD'] === 'POST') {



	// check if there is any missing data
	if(!isset($_POST['username']) || !isset($_POST['password']) || !isset($_POST['confirm'])) {
		die('Error, missing data. <a href="register.php"> Please try again.</a>');
	}

	// rename the post variables
	$username =& $_POST['username'];
	$password =& $_POST['password'];
	$confirm =& $_POST['confirm'];

	// if the username is not in between 4 and 16 characters and consists of only numbers and letters then
	if( preg_match('/^[A-Za-z0-9]{4,16}$/', $username ) !== 1 ) {
		die('Your username MUST consist of at least 4 characters that consists of numbers and/or letters. <a href="register.php"> Please try again.</a>');
	}

	//check if the password and confirm password are the same
	if ($password !== $confirm) {
		die('Your passwords did not match. <a href="register.php"> Please try again.</a>');
	}

	// put the username and password in lowercase letters
	$username = strtolower($username);

	// check if the username is the same as the password
	if($username === $password) {

		echo 'Your username shouldn\'t be the same as your password!';
	}


	// check if the user exists
	if(check_user_exists($db, $username) === true) {
	//if not then tell them to create a new username
	echo 'This username already exists. Please create a new username.';
	}
	else {

		//hash the password
		$password = md5( $password );

		$query = 'INSERT INTO "users" VALUES ( NULL, :username, :password)';

		// prevent sql injection by binding the user inputs then put the username and password into the database.
		$result = $db->prepare($query);
		$result->bindValue( ':username', $username );
		$result->bindValue( ':password', $password );
		$result->execute();

		echo '<h3>Thank you for joining the Heat Check community, ', $_POST['username'], '.</h3><p>Click <a href="signin.php">here</a> to sign in.</p>';

		exit;

	}

}

?>

<html>

	<h2>Become a Heat Checker</h2>

	<form method="post" action="register.php">

		<p>Username: <input type="text" name="username" autocomplete="off"></p>
		<p>Password: <input type="password" name="password" autocomplete="off"></p>
		<p>Confirm Password: <input type="password" name="confirm" autocomplete="off"></p>

		<p><input type="submit" value="Register"></p>

	</form>

	<p>Already have an account? Sign in <a href="signin.php">here</a>.

</html>