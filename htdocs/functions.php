<?php

// gain acess to the database
$db = new PDO( 'sqlite:../private/eriyeza.db' );
$db->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
$db->setAttribute( PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ );
$db->exec( 'PRAGMA "foreign_keys" = ON' );



// if the user is logged in, put the session variables in easier to type variable names
if(isset($_SESSION['id']) && isset($_SESSION['user']) && isset($_SESSION['signedin'])) {
	$id =& $_SESSION['id'];
	$user =& $_SESSION['user'];
}

//this function will check if a user exists fore registering
function check_user_exists($db, $username) {

	$queryString = 'SELECT count( * ) AS \'count\' FROM \'users\' WHERE "user_username" = :username';
	$result = $db->prepare($queryString);
	$result->bindValue(':username', $username);
	$result->execute();
	$exists = $result->fetchObject();

	return ( $exists->count === "1" );
}

//this function will look for the user in the database
function login($db, $username, $password) {

	if(check_user_exists($db, $username) === "1") {
		return false;
	}
	else {

		$query = 'SELECT "user_id" AS \'id\', "user_password" AS \'password\' FROM "users" WHERE "user_username" = :username';
		$result = $db->prepare( $query );
		$result->bindValue( ':username', $username );
		$result->execute();
		$row = $result->fetch();

		return $row;
	}

}

?>