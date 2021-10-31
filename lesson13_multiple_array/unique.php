<?php


$angie_ordered = array("orange", "banana", "orange", "mango", "mandarini", "banana");

//$answer = array("orange", "banana", "mango", "mandarini");

$answer = array();
for ($i = 0; $i < count($angie_ordered); $i++) {
	$fruit = $angie_ordered[$i];
//if empty array answer with key "orange", array answer with key "orange" has value of key "orange".
	if (empty($answer[$fruit])) {
		$answer[$fruit] = $fruit;
	}
}

echo '<pre>';
print_r($answer);
//convert to array where key is numerical:
print_r(array_values($answer));

print_r(array_unique(array("orange", "banana", "orange", "mango", "mandarini", "banana")));



//-------------------example 3 make list of fruits that are more than 1-----------------
$angie_ordered = array("orange", "banana", "orange", "mango", "mandarini", "banana");


$answer = array();
for ($i = 0; $i < count($angie_ordered); $i++) {
	$fruit = $angie_ordered[$i];
	if (empty($answer[$fruit])) {
		$answer[$fruit] = 1;
	} else {
		$answer[$fruit] = $answer[$fruit] + 1;
	}
}

foreach ($answer as $fruit => $amount) {
	if ($amount  == 1) {
		unset($answer[$fruit]);
	}
}

print_r($answer);