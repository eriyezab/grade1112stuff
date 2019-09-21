<?php

require 'functions.php';

$title = 'Home';
require 'header.php';

// if the user is signed in then welcome them and show a sign out option
if ( isset( $_SESSION['signedin'] ) && $_SESSION['signedin'] === true ) {

echo '<h3>Welcome , ', $_SESSION['user'], '.</h3>';

echo '<p><a href="signout.php" id="signout">Sign out</a></p>';

}
// if they are not signed in then give them the option to sign in
else
echo '<a href="signin.php" id="signin">Sign in</a>';

// display the shoes by first accessing them from the database
$query = 'SELECT "shoe_id", "brand_id" AS \'brand\', "shoe_title" AS \'name\', "shoe_description" AS \'description\', "shoe_image" AS \'picture\', "shoe_link" AS \'link\' FROM "shoes"';
$result = $db->execute($query);
$data = $result->fetch();

















require 'footer.php';



?>