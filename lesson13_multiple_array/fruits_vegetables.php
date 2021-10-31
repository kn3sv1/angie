<?php
//calculate how many fruit and how many vegatables in array
$food = array("orange", "banana", "tomato", "cucumber", "strawberry");

//fruit = 1 + 1 + 1
//vegatable = 1 + 1

$fruits = ["apple", "banana", "orange", "strawberry", "mango", "peach"];
$vegatables = ["watermellon", "tomato", "cucumber", "latters"];

//count by
$fruits_vegatebles = array("fruits" => 0, "vegatables" => 0);

for ($i = 0; $i < count($food); $i++) {
	if (in_array($food[$i], $fruits)) {
		$fruits_vegatebles["fruits"] = $fruits_vegatebles["fruits"] + 1;
	} elseif (in_array($food[$i], $vegatables)) {
		$fruits_vegatebles["vegatables"] = $fruits_vegatebles["vegatables"] + 1;
	}
}
echo '<pre>';
print_r($fruits_vegatebles);