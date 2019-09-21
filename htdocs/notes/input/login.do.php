<?php

// input:

$username =& $_POST['username'];
$password =& $_POST['password'];

// processing:

//determine if the username and password are in fact correct, and do something different in each case

if( $username === 'ezbrez' && $password === 'guest' )
{

	echo 'Yay, you are logged in.';

}
else
{

	echo 'You foolish mortal, you are incorrect.';

}

?>