<h1>NBA Christmas Game Tickets!</h1>
<h2>Exclusive Offers!</h2>

<form action="payment.php" method="post">

<input type="hidden" name="check" value="eriyeza">

<p> Enter a valid email address. </p> <p> <input type="email" name="email" placeholder ="Email"></p>

<p> Enter name of Ticketholder. </p><p> <input type="text" name="name" placeholder ="Full Name"> </p>

<p> <input type="checkbox" name="terms" value="yes"> Are you 18 or older? </p>

<p> Which NBA Game would you like to see? </p>

<p>
	<input type="radio" name="game" value="phivsnyk">76ers vs. Knicks<br>
	<input type="radio" name="game" value="clevsgsw">Cavaliers vs. Warriors<br>
	<input type="radio" name="game" value="wasvsbos">Wizards vs. Celtics<br>
	<input type="radio" name="game" value="houvsokc">Rockets vs. Thunder<br>
	<input type="radio" name="game" value="minvslal">Timberwolves vs. Lakers<br>
</p>

<p> How many tickets would you like to purchase?</p>
<p>
<select name="tickets">

	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	<option value="5">5</option>
	<option value="6">6</option>
	<option value="7">7</option>
	<option value="8">8</option>
	<option value="9">9</option>
	<option value="10">10</option>

</select>
</p>

<input type="submit" value="Enter">

</form>