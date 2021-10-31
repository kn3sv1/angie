<?php
$numbers1 = array(30, 5, 10, 3, 6, 20, 9, 50);
$numbers2 = array(90, 10, 5, 50, 6);
$common_numbers = array();

for ($i = 0; $i < count($numbers1); $i++) {
	for ($j = 0; $j < count($numbers2); $j++) {
		if ($numbers1[$i] == $numbers2[$j]) {
			$common_numbers[$i] = $numbers1[$i];
		}	
	}
}	


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
