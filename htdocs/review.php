<?php

//start the session
session_start();


// if they aren't signed in then something is wrong
if($_SESSION['signedin'] !== true)
die('You must be signed in to access this content');

// include the functions
require 'functions.php';

// if they didn't post data, THEY'RE TRYING TO HACK US
if( $_SERVER['REQUEST_METHOD'] !== 'POST' )
die( 'Data was not posted' );

// if a shoe is not posted or a review is not posted then something is wrong
if( !isset( $_POST['shoe'] ) || !isset( $_POST['review'] ) )
die( 'Data was missing' );

//assign the variables easier to use names
$shoe = (int) $_POST['shoe'];
$review =& $_POST['review'];

//add their comment into the database
$query = 'INSERT OR REPLACE INTO "reviews" VALUES ( :shoe, :user, :review, :date )';
$result = $db->prepare($query);
$result->bindValue( ':shoe', $shoe);
$result->bindValue( ':user', $id);
$result->bindValue( ':review', $review);
$result->bindValue( ':date', date( 'Y-m-d H:i:s' ) );
$result->execute();

//send them back to the previous page
header( 'Location: shoe.php?id=' . $shoe);
exit;



