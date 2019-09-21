<?php

// $eriyeza = [

// 	'name' => 'Eriyeza',
// 	'age' => 17,
// 	'height' => 188,
// 	'friend' => 'Ryan'

// ];

// $han = [

// 	'name' => 'Han',
// 	'age' => 16,
// 	'height' => 153,
// 	'friend' => 'Chloe'

// ];

// $jamon = [

// 	'name' => 'Jamon',
// 	'age' => 17,
// 	'height' => 194,
// 	'friend' => 'Liam'

// ];

// echo '<p>';

// foreach($details as $a => $b) {

// 	echo $a, ': ', $b, '<br>';

// }

// echo '</p>';


// $p1 = [ 5, 6, 7, 8 ];
// $p2 = [ 2, 7, 9, 1 ];

$people = [

	[

		'name' => 'Eriyeza',
		'age' => 17,
		'height' => 188,
		'friend' => 'Ryan'

	],

	[

		'name' => 'Jamon',
		'age' => 17,
		'height' => 194,
		'friend' => 'Liam'

	],

	[

		'name' => 'Han',
		'age' => 16,
		'height' => 153,
		'friend' => 'Chloe'

	]

];

foreach( $people as $person ) {

	echo '<h1>', $person['name'], '</h1>';
	unset($person['name']);

	foreach( $person as $stat => $data ) {

		echo $stat, ': ', $data, '<br>';

	}

	echo '</p>';
}