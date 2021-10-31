<?php

//json is a very popular way to convert array to string and string to array to be able to save that information
//in a txt file that we can manipulate by adding more information and uploading later.

$cats = [
	['name' => 'Tedaki', 'color' => 'black and white',],
	['name' => 'Ginger', 'color' => 'orange and white',],
	['name' => 'Hitler', 'color' => 'white',],
	['name' => 'Blacky', 'color' => 'black',],
	['name' => 'Amanda', 'color' => 'orange',],
];

echo '<pre>';
$json_string = json_encode($cats, JSON_PRETTY_PRINT);

//echo $json_string;

file_put_contents('cats_list.txt', $json_string);