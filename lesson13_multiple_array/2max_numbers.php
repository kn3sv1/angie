<?php

$numbers = array(6, 4, 3, 8, 2, 10, 9, 20, 5, 30);
$max1 = $numbers[0];
$max2 = $numbers[1];

for ($i = 2; $i < count($numbers); $i++) {
	// we look for smallest from  $max1,$max2 to replace
	//if $max1 < $max2 we replace $max1
	if ($max1 < $max2) {
		if ($max1 < $numbers[$i]) {
			$max1 = $numbers[$i];
			continue;
		}	
	}	
	//if $max2 < $max1 we replace $max2
	if ($max2 < $max1) {
		if ($max2 < $numbers[$i]) {
			$max2 = $numbers[$i];
			continue;
		}	
	}	
}

echo "max1 = $max1, max2= $max2 <br />";


$numbers = array(6, 4, 3, 8, 2);
$min1 = $numbers[0];
$min2 = $numbers[1];

for ($i = 2; $i < count($numbers); $i++) {
	// we look for bigger from $min1,$min2 to replace
	if ($min1 > $min2) {
		if ($min1 > $numbers[$i]) {
			$min1 = $numbers[$i];
			continue;
		}	
	}	

	if ($min2 > $min1) {
		if ($min2 > $numbers[$i]) {
			$min2 = $numbers[$i];
			continue;
		}	
	}		
}

echo "min1 = $min1, min2= $min2";


