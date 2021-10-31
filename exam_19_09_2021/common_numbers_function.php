<?php

function get_common_numbers($numbers1, $numbers2) {
	$common_numbers = array();

	for ($i = 0; $i < count($numbers1); $i++) {
		for ($j = 0; $j < count($numbers2); $j++) {
			if ($numbers1[$i] == $numbers2[$j]) {
				$common_numbers[$i] = $numbers1[$i];
			}	
		}
	}

	return $common_numbers;
}


$numbers1 = array(30, 5, 10, 3, 6, 20, 9, 50);
$numbers2 = array(90, 10, 5, 50, 6);
$common_numbers = get_common_numbers($numbers1, $numbers2);


echo '<pre>';
print_r($common_numbers);

/*
for ($i = 0; $i < count($common_numbers); $i++) {
	echo '<br /> Number is: ' . $common_numbers[$i];
}
*/


foreach ($common_numbers as $key => $val) {
	echo "<br /> Number is with KEY: $key, VALUE: $val";
}


$numbers3 = array(30, 5, 10, 3, 6, 20, 9, 50);
$numbers4 = array(90, 10);
$common_numbers5 = get_common_numbers($numbers3, $numbers4);


echo '<p style="padding:30px 0; color:green;font-weight:bold;font-size:22px">--------------new array---------------------</p>';
print_r($common_numbers5);
