<h1> Checkout </h1>
<?php

// if they dont have the data asked for on the form then stop the program and tell them to go back and fill it out properly also if they dont have the hidden check then they must be dangerous
if( !isset($_POST['email']) || !isset($_POST['name']) || !isset($_POST['game']) || !isset($_POST['tickets']) || !isset($_POST['check']))
die('Missing data. Please go back and fill out the entire form.');

// assign easeir variable names to the pre existing variables
$email =& $_POST['email'];
$name =& $_POST['name'];

// if the name contains anything other than upper and lower case letters and spaces and isn't at least 5 characters long then tell them to enter a valid name
if(preg_match( '/^[A-Za-z\s]{5,}$/', $name) !== 1)
{

	die('Please enter your full name.');

}
else
{

	$name = ucwords(strtolower($name));

}

// validate the email and if its not a valid email stop the program
if(!filter_var($email, FILTER_VALIDATE_EMAIL))
die('Please enter a valid email.');

// if the $_POST['terms'] variable exists and the value is yes then
if(isset($_POST['terms']) && $_POST['terms'] === 'yes')
{

	// define the variable terms with the value 'yes'
	$terms = 'yes';

}
//if not
else
{

	// do not allow them to proceed
	die('You need to be 18 or older to continue');

}

// create an array of acceptable values for the tickets variable
$tickets_acceptable = ['1', '2', '3', '4', '5', '6', '7', '8', '9', '10'];

// check if the tickets from the form matches with the acceptbale values
if( in_array($_POST['tickets'], $tickets_acceptable ) )
{

	// if so convert the tickets into a number so that you can do calculations with it
	$tickets = (float) $_POST['tickets'];

}
// if not
else
{

	// stop the program bc there might be malicious intent, prompt the user to go back and check a proper ticket number
	die('Please go back and select the number of tickets you would like to purchase.');


}

// if the $_POST['game'] exists then
if( isset($_POST['game']) )
{

	// assign values to the variable game based on what is in the $_POST['game'] variable and assign a price variable that contains a number
	if($_POST['game'] === 'phivsnyk' )
	{
		$game = '76ers vs. Knicks';
		$price = 175;
	}

	elseif($_POST['game'] === 'clevsgsw' )
	{
		$game = 'Cavaliers vs. Warriors';
		$price = 325;
	}

	elseif($_POST['game'] === 'wasvsbos' )
	{
		$game = 'Wizards vs. Celtics';
		$price = 225;
	}

	elseif($_POST['game'] === 'houvsokc' )
	{
		$game = 'Rockets vs. Thunder';
		$price = 275;
	}
	elseif($_POST['game'] === 'minvslal' )
	{
		$game = 'Timberwolves vs. Lakers';
		$price = 250;
	}

}
// if the value in the $_POST['game'] variable does not match with the values above then
else
{
	//stop the program bc something isn't right
	die('Please go back and select the game you would like to watch.');
}

// calculate the cost of the tickets
$tickets_cost = $tickets * $price;

echo $name, ', the cost to go see the ', $game, ' game will cost: <b>$', $tickets_cost,'</b>.';

// var_dump($_POST);
?>

<form action="do.php" method="post">
<input type="hidden" name="email" value="<?php echo $email; ?>">
<input type="hidden" name="name" value="<?php echo $name; ?>">
<input type="hidden" name="terms" value="<?php echo $terms; ?>">
<input type="hidden" name="game" value="<?php echo $game; ?>">
<input type="hidden" name="tickets" value="<?php echo $tickets; ?>">

<h2> Payment Method: </h2>
<p>
	<input type="radio" name="payment" value="visa">Visa
	<input type="radio" name="payment" value="mcard">Mastercard
	<input type="radio" name="payment" value="axpress">American Express
</p>

<p> Enter your card information. </p>
<p>

	<input type="text" name="cname" placeholder ="Full Name">

	<input type="text" name="cnumber" maxlength="16" size="16" placeholder ="Card Number">

	<input type="text" name="cexpiry" maxlength="5" size="5" placeholder ="MM/YY">

	<input type="text" name="cvn" maxlength="3" size="3" placeholder ="CVN">

</p>

<input type="submit" value="Buy Tickets">

</form>