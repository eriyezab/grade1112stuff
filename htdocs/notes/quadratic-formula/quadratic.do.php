<?php

// input
$a = (float) $_POST['a-value'];
$b = (float) $_POST['b-value'];
$c = (float) $_POST['c-value'];

// if a = 0 then we can't execute the function so return an error
if($a === 0.0)
echo 'You did not enter a quadratic! (a != 0)';
// if they do enter a value for a then execute the quadratic formula calculate
else
{
//BASED ON THE DISCRIMINANT, FIGURE OUT HOW MANY AND WHAT THE POSSIBLE SOLUTIONS ARE AND FORMAT IT

	// calculate the discriminant
	$discriminant = (float) $b ** 2 - 4 *$a * $c;

	// determine with the discriminant the amount of solutions possible
	// if the discriminant is positive
	if($discriminant > 0.0)
	{

		//there is two solutions
		$amtOfSolutions = 'two solutions';
		// calculate the solutions
		$x1 =  (-$b + sqrt($discriminant)) / (2 * $a);
		$x2 =  (-$b - sqrt($discriminant)) / (2 * $a);
		// display the solutions
		$solutions = '{ '.min($x1, $x2).', '.max($x1, $x2).' }';

	}
	elseif($discriminant === 0.0)
	{

		// there is one solution
		$amtOfSolutions = 'one solution';
		// calculate the solution
		$x1 =  (-$b) / (2 * $a);
		// and the solution is
		$solutions = '{ '.$x1.' }';
	}
	else
	{

		// there is no solution
		$amtOfSolutions = 'no solution';
		// so the solution is and empty set
		$solutions = 'Ø';

	}

// FORMAT THE EQUATION TO BE DISPLAYED NICELY

	//if a or b = 1 then we don't need to display the 1
	// if a === 1
	if($a === 1.0 )
	// take away the coefficient
	$a = '';
	// if a === -1
	elseif($a === -1.0)
	// take away the coefficient
	$a = '-';
	// if b === 1
	if($b === 1.0)
	// take away the coefficient
	$b = '';
	// if b === -1
	elseif($b === -1.0)
	// take away the coefficient
	$b = '-';

	// the equation must have an ax ** 2 value so start with that
	$equation = $a.'x<sup>2</sup>';

	// if b is 0 then the equation needs to be changed to not display that value
	if ( $c !== 0.0 && $b !== 0.0)
	$equation .= ' + '.$b.'x + '.$c;
	// if c is 0 then the equation needs to be changed to not display that value
	elseif ( $c === 0.0 && $b !== 0.0)
	$equation .= ' + '.$b.'x';
	// if b and c aren't 0 then display the equation normally
	elseif ( $b === 0.0 && $c !== 0.0)
	$equation .= ' + '.$c;

	// if b or c are negative then we need to change the equation to change the plus negative numbers to subtract
	if($b < 0.0 || $c < 0.0)
	$equation = str_replace( '+ -', '- ', $equation);

// PRINT THE FINAL ANSWER

	// print the equation as well as how many solutions there are
	echo '<p>The quadratic ', $equation, ' has ', $amtOfSolutions, '! </p> <p> x ∈ ', $solutions, '</p>';
}

?>