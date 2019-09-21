<?php


$n = 3.5;

if( $n === 0 )
{
	$n = 1;
}
else if($n < 0)
{
	$n = 'undefined';
}
else
{
	for($i = $n - 1; $i >= 1; $i--)
	{
		$n *= $i;
	}
}
echo $n;