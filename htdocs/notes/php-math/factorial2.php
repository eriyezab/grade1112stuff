<?php

function fact ($n)
{
	if( $n === 0) return 1;
	else if($n < 0) return 'undefined';
	else return $n * fact($n - 1);
}

echo 'The factorial of 8 is ', fact (8);