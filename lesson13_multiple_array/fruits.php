<?php

$angie_likes = array("orange", "banana", "cherry", "mango");
$roma_likes = array("apple", "tomato", "orange", "mango", "mandarini");


//What common fruint like roma & angie?

$common_fruits = array();
for ($i = 0; $i < count($angie_likes); $i++) { //orange
	for ($j = 0; $j < count($roma_likes); $j++) { //"apple", "tomato", "orange", "mango", "mandarini"
		if ($angie_likes[$i] == $roma_likes[$j]) {
			$common_fruits[] = $roma_likes[$j];
		}
	}
}

echo '<pre>';
print_r($common_fruits);



echo "<br />------------EXAMPLE 2-----------------------<br />\n";

$angie_ordered = array("orange", "banana", "orange", "mango", "mandarini", "banana");

//find how many each fruit Angie ordered?
//Key is name eg "orange"
/*
ANSWER:  
array(
	"orange" => 2,
	"banana" => 2,
	"mango" => 1,
	"mandarini" => 1,
);

*/
echo '</pre>';
$answer = array();
for ($i = 0; $i < count($angie_ordered); $i++) {
	$fruit = $angie_ordered[$i];
	echo "<br />\nfruit($i): $fruit ";
	/*
	if ($fruit == "banana" || $fruit == "orange") {
		continue;
	}
	*/
/*
$angie_ordered[$i] is specifically index "orange" not the whole array with index! 	
if its empty array $answer with key [orange] then add key from another array and value = to 1; 	
$answer = array("orange" => 1);
*/
	if (empty($answer[$fruit])) {
		$answer[$fruit] = 1;
	} else {
		$answer[$fruit] = $answer[$fruit] + 1;
	}
	//print_r($answer);
}

echo '<pre>';
print_r($answer);

echo "<br />------------EXAMPLE 3 straws-----------------------<br />\n";





