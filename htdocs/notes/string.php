<?php

// 2
$text = 'Microsoft rules!';
$output = str_replace('Microsoft', 'Linux', $text);

echo $output;

echo '<p>';

//3
$text = 'I aM a CrAzY pErSoN.';
$output = ucfirst( strtolower($text));

echo $output;

echo '<p>';

//4
$text = 'Wait just a minute';
$output = strrev( ucwords( strtolower(strrev( $text) ) ));

echo $output;

echo '<p>';

//5
$text = 'This is the amazing sentence.';
$output = str_word_count( $text );

echo $output;

echo '<p>';

// 6
$text = 'first*second/third?fourth.fifth&sixth';
$output = substr( $text, strpos( $text, '?') + 1 );

echo $output;

echo '<p>';

//7
$text = 'first*second/third?fourth.fifth&sixth';
$output = strpos($text, '?');

echo $output;

echo '<p>';

//8
$text = 'happy=yes&sad=no&success=yes&failure=no';
$firstsubstr = substr($text, strpos($text, 'success'));
$secondsubstr = substr($firstsubstr, strpos($firstsubstr, '=') + 1);
if(strpos($secondsubstr, '&') !== false)
{
	$output = substr($secondsubstr, 0, strpos($secondsubstr, '&'));
}
else
{
	$output = $secondsubstr;
}

echo $output;

?>