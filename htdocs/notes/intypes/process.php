<?php

if( !isset($_POST['email']) || !isset($_POST['username']) || !isset($_POST['password']) || !isset($_POST['confirm']) || !isset($_POST['mbti']))
die('Error. Missing Data!');

// this is for textual input

$email =& $_POST['email'];
$username =& $_POST['username'];
$password =& $_POST['password'];
$confirm =& $_POST['confirm'];

if($password !== $confirm)
{

	die('Your passwords do not match.');

}

if(preg_match( '/^[A-Za-z0-9\_]{6,}$/', $username) !== 1)
{

	die('Your username is invalid!');

}

// this is for checkbox input
// if the variable $_POST['terms'] exists and the value is yes then
if(isset($_POST['terms']) && $_POST['terms'] === 'yes')
{

	// define the variable terms with the value 'yes'
	$terms = 'yes';

}
//if not
else
{

	// define the variable terms with the value 'no'
	$terms = 'no';

}

if(isset($_POST['privacy']) && $_POST['privacy'] === 'yes')
{

	$privacy = 'yes';

}
else
{

	$privacy = 'no';

}

// this is how we handle radio buttons

if( isset($_POST['attitude']) )
{

	// if($_POST['attitude'] === 'angry' )
	$attitude =& $_POST['attitude'];

	// elseif($_POST['attitude'] === 'hungry' )
	// $attitude = 'hungry';

	// elseif($_POST['attitude'] === 'hangry' )
	// $attitude = 'hangry';

}
else
{

	$attitude = null;
}

// how to handle input from a select

// if($_POST['mbti'] === 'istj')
// $mbti = 'istj';

// elseif($_POST['mbti'] === 'istj')
// $mbti = 'istj';

// elseif($_POST['mbti'] === 'istj')
// $mbti = 'istj';

// elseif($_POST['mbti'] === 'istj')
// $mbti = 'istj';

$mbti_acceptable = ['istj', 'istp', 'isfj', 'isfp', 'intj', 'intp', 'infj', 'infp', 'estj', 'estp', 'esfj', 'esfp', 'entj', 'entp', 'enfj', 'enfp'];

if( in_array($_POST['mbti'], $mbti_acceptable ) )
{

	$mbti = $_POST['mbti'];

}
else
{

	$mbti = null;

}


echo '<p>Email: ', $email, '</p>';
echo '<p>Username: ', $username, '</p>';
echo '<p>Password: ', $password, '</p>';
echo '<p>Agree to Terms: ', $terms, '</p>';
echo '<p>Accept Privacy: ', $privacy, '</p>';
echo '<p>Personality Type: ', $mbti, '</p>';

?>