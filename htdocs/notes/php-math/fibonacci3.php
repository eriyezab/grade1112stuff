<?php

function fibo($n)
{
	$counter = 0;
	$fibonacci = 1;

	for($i = 1; $i < $n; $i++)
	{

		$fibonacci += $counter;
		$counter = $fibonacci - $counter;

	}

	return $fibonacci;

}

$n = 3;

echo 'The ', $n, 'th fibonacci number is: ', fibo($n);


