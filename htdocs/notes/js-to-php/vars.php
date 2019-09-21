<?php

// declare a variable - CANNOT BE DONE

// define a variable
$name = "Mr. Beans";
$age = 17;

// declare and define a variable - NOT IMPORTANT

// print the persons name and age - THIS IS THE WORST OPTION EVER
echo "<p>".$name." is ".$age." years old.</p>";

// Cool Thing #1
echo "<p>$name is $age years old.</p>";

// Cool Thing #2
echo '<p>'.$name.' is '.$age.' years old.</p>';

// Cool Thing #3
echo '<p>$name is $age years old.</p>';

// Cool Thing #4 - THIS IS THE MOST EFFICIENT OPTION
echo '<p>', $name, ' is ', $age, ' years old.</p>';

?>