<?php

require 'functions.php';

// if they have tried to log in from this page
if( $_SERVER['REQUEST_METHOD'] === 'POST' )
{

	// check if there is any missing data
	if(!isset($_POST['username']) || !isset($_POST['password']))
	die('Error, missing data. <a href="signin.php"> Sign in here.</a>');

	// rename the post variables
	$username =& $_POST['username'];
	$password =& $_POST['password'];

	// if they left anything blank, refuse the request
	if( empty( $username ) || empty( $password ) )
	die( 'You did not specify both a username and a password' );

	// make sure the username is lowercase since capital letters are treated as different than lower case
	$username = strtolower( $username );

	// check for the user in the database and get their info
	$row = login($db, $username, $password);

	// if the user is not a valid user link them to the sign in page again or the register page
	if($row === false )
	die('You entered an invalid username. <a href="signin.php"> Please try again.</a> or <a href="register.php"> Register here.</a>');

	// hash the password then check if the password match and if they dont then die
	if (md5($password) !== $row->password)
	die('You entered an invalid password. <a href="signin.php"> Please try again.</a>');

	//now that they have escaped all the die functions, they are finally logged in so remember that they are logged in by starting a session and assigning session variables
	session_start();

	$_SESSION['id'] = (int) $row->id;
	$_SESSION['user'] = $username;


	$_SESSION['signedin'] = true;

	// redirect them to the home page
	header( 'Location: index.php');

	exit;

}

require 'header.php';

$title = 'Sign In';


?>
<form action="signin.php" method="post">

Username: <input type="text" name="username"> <br>
Password: <input type="password" name="password"> <br>

<input type="submit" name="Login" value="Sign in">

</form>

<p> Don't have an account? <a href="/register.php">Register here</a>

<?php

require 'footer.php';

?>