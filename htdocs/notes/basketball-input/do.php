<?php
// var_dump($_POST);
// if the email, username, player, or nbateam's do not exist in the form then terminate the program
if( !isset($_POST['email']) || !isset($_POST['name']) || !isset($_POST['terms'])  || !isset($_POST['game']) || !isset($_POST['tickets']) || !isset($_POST['payment']) || !isset($_POST['cname'])  || !isset($_POST['cnumber']) || !isset($_POST['cexpiry']) || !isset($_POST['cvn']))
die('Error. Missing Data!');

// assign easier names for the pre-existing variables
$email =& $_POST['email'];
$name =& $_POST['name'];
$terms =& $_POST['terms'];
$game =& $_POST['game'];
$tickets =& $_POST['tickets'];
$payment =& $_POST['payment'];
$cname =& $_POST['cname'];
$cnumber = $_POST['cnumber'];
$cexpiry =& $_POST['cexpiry'];
$cvn = $_POST['cvn'];

// handling payment

// if $_POST['payment'] exists and it is one of the three options then
if( isset($_POST['payment']) && (($_POST['payment'] === 'visa') || ($_POST['payment'] === 'mcard') || ($_POST['payment'] === 'axpress')))
$payment = strtoupper($_POST['payment']);
else
die('You did not select a valid payment option.');

// handling the name on the card

// if the card name contains anything other than upper and lower case letters and spaces and isn't at least 6 characters long then tell them to enter a valid card name
if(preg_match( '/^[A-Za-z\s]{6,}$/', $cname) !== 1)
{

	die('Please enter the full name on the card.');

}
// if its valid then ensure that it is formatted like a a name on a credit card
else
{

	$cname = strtoupper($name);

}



// ensure that cnumber and cvn are actual numbers and are the required length
if(preg_match( '/^[0-9]{13,16}$/', $cnumber) !== 1 || preg_match( '/^[0-9]{3}$/', $cvn) !== 1)
{

	die('Please enter a valid card number and/or CVN.');

}

// make sure the cexpiry is 5 characters long
if(strlen($cexpiry) === 5)
{

	// ensure that cexpiry is a legitimate date by separating it into three strings
	// the first string will be the month
	$month = (int) substr($cexpiry, 0, 2);
	// second string will be slash
	$slash = substr($cexpiry, 2, 1);
	// third and last string wil be year
	$year = (int) substr($cexpiry, 3, 2);

	// now if month isn't between 1 and 12 and year isn't greater than 16 and slash isn't an actual / then stop the program
	if( ($month < 1 && $month > 12) && $slash !== '/' && $year < (int) date(y) )
	die('Please enter the correct expiry date on your card.');

}
// if the string length is not 5 then stop the program
else
die('Please enter the correct expiry date on your card.');


echo '<p>Thank you <b>', $name, '</b> for purchasing <b>', $tickets, ' </b>ticket(s) to go see the <b>', $game, '</b> on December 25th. You said <b>', $terms, '</b> to the terms so you will receive your tickets by email at <b>', $email, '</b> shortly. </p> <h3> Payment Information </h3> Payment Method: ', $payment, '<br>Name of Cardholder: ', $cname, '<br> Card Number: ', $cnumber, '<br> Expiry Date of the Card: ', $cexpiry, '<br> CVN: ', $cvn;




?>