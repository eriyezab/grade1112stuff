<?php

if( $_SERVER['REQUEST_METHOD'] === 'POST' ) {


	$db = new PDO( 'sqlite:../../private/sessions.db' );
	$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
	$db->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ );

	$query = 'INSERT INTO "users" VALUES (

		NULL,
		\''.$_POST['nickname'].'\',
		\''.$_POST['password'].'\'

	)';

	// $query = 'text ' . $var . 'more text ' . $morevar . 'last text';
	$db->exec( $query );

	exit;

}

?>

<html>

	<h1> Register for my site</h1>

	<form method="post" action="register.php">

		<p>Nickname: <input type="text" name="nickname" autocomplete="off"></p>
		<p>Password: <input type="text" name="password" autocomplete="off"></p>

		<p><input type="submit" value="Register"></p>

	</form>

</html>