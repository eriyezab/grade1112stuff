<?php

$name = 'Eriyeza';

$time1_start = microtime(true);

for( $i = 0; $i < 1000000; $i++ )
{
    echo "Good morning, $name!";
}

$time1_end = microtime(true);
$time1 = $time1_end - $time1_start;

$time2_start = microtime(true);

for( $i = 0; $i < 1000000; $i++ )
{
    echo 'Good morning, ' . $name . '!';
}

$time2_end = microtime(true);
$time2 = $time2_end - $time2_start;

// $time3_start = microtime(true);

// for( $i = 0; $i < 1000000; $i++ )
// {
//     echo 'Good morning, ', $name, '!';
// }

// $time3_end = microtime(true);
// $time3 = $time3_end - $time3_start;

// Thought of a different way to execute echo but it didnt allow me to include this and repeat a million times becasue the code wouldnt fit on the page. However when i did it with only 10 000 loops it would on average be faster than time 1 and time 3 and sometimes even time 2.
$time4_start = microtime(true);

for( $i = 0; $i < 1000000; $i++ )
{
    echo 'Good morning, ', "$name!";
}

$time4_end = microtime(true);
$time4 = $time4_end - $time4_start;

echo '<p>Time 1: ', $time1, '<p>';

echo 'Time 2: ', $time2, '<p>';

// echo 'Time 3: ', $time3, '<p>';

echo 'Time 4: ', $time4, '<p>';
?>