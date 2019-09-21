<?php

$n = 8;
$adder = 0;
$fibonacci = 1;

for($i = 1; $i <= $n; $i++)
{
	echo "<p>$fibonacci</p>";
	$fibonacci += $adder;
	$adder = $fibonacci - $adder;
}