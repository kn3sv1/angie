<?php

$numbers = array(5, 10, 14, 18, 20, 24, 155, 25, 77, 18, 44);

$max = 0;

for ($i = 0; $i < count($numbers); $i++) {
	if ($numbers[$i] > $max) {
		$max = $numbers[$i];// we cannot say $numbers[$i] = $max because that means that all numbers will equal 0
    }	
}	

echo $max;





$numbers = array(105, 1788, 14, 18, 20, 24, 155, 25, 77, 18, 44);
$max = 0;

for ($i = 0; $i < count($numbers); $i++) {
	if ($numbers[$i] > $max) {
		$max = $numbers[$i];// we cannot say $numbers[$i] = $max because that means that all numbers will equal 0
    }	
}	

echo $max;


function findMax($numbers2) {
	$max = 0;
	for ($i = 0; $i < count($numbers2); $i++) {
		if ($numbers2[$i] > $max) {
			$max = $numbers2[$i];// we cannot say $numbers[$i] = $max because that means that all numbers will equal 0
		}	
	}	
	return $max;
}

//$numbers = array(11105, 178, 14, 18, 20, 24, 155, 25, 77, 18, 44);
$maxReturned = findMax(array(11105, 178, 14, 18, 20, 24, 155, 25, 77, 18, 44));

echo "<br /><br /> MAX number is: $maxReturned";


$numbers = array(105, 178, 14, 18, 20, 24, 155, 200005, 77, 18, 44);
$maxReturned = findMax($numbers);

echo "<br /><br /> MAX2 number is: $maxReturned";