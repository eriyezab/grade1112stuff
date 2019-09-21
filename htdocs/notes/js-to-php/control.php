<?php

// 2
$color = 'red';

if($color === 'blue')
{
	echo 'Wow, blue is a great colour.';
}
else if($color === 'red')
{
	echo 'I definitely agrree that red is a great colour.';
}
else
{
	echo 'I can sorta agree that green is good';
}

echo '<p>';

//3

$fullness = 100;

while( $fullness > 0 )
{
    echo 'The glass is currently ', $fullness, '% full.<br>' ;
    $fullness -= 10;
}

echo 'The glass is empty now!';

echo '<p>';

//4
$currentNumber = 0;

while( $currentNumber <= 100 )
{
    if( $currentNumber % 2 === 1 )
    {
        echo $currentNumber, ' is odd<br>' ;
    }
    else
    {
        echo $currentNumber, ' is even<br>' ;
    }
	$currentNumber++;
}

//5
for( $i = 0; $i < 15; $i++ )
{
    echo $i, '<br>' ;
}

echo '<p>';

//6
$collatz = 13;
echo $collatz ;

while( $collatz !== 1 )
{
    if( $collatz % 2 === 0 )
    {
        $collatz /= 2;
    }
    else
    {
        $collatz = 3 * $collatz + 1;
    }

    echo ', ', $collatz;
}

?>