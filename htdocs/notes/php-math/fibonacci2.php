<?php

function fibo ( $n )
{

	if ($n === 1) return 1;
	else if ($n === 2) return 1;
	else return fibo ($n - 2) + fibo ($n - 1);

}

echo 'The 8th fibonacci number is ', fibo(8);