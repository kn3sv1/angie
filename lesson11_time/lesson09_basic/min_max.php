<?php

$salaries = array( 50,  400, 30,  1000);

$min = $salaries[0];
for ($i = 0; $i < count($salaries); $i = $i +1) {
	echo "i = $i, {$salaries[$i]} is less than {$min} <br />";
	if ($salaries[$i] < $min) {
		echo "WE CHANGE MIN to new VALUE: {$salaries[$i]} <br /> <br />";
		$min = $salaries[$i];
	}	
}

echo "<br /> <br /> ";

echo "smallest value is: {$min}<br />";


$max = $salaries[0];
for ($i = 0; $i < count($salaries); $i = $i +1) {
     if ($salaries[$i] > $max) {
		$max = $salaries[$i];
	 }
}
echo "biggest value is: {$max}<br />";


echo "<br /> <br /> ";
$people = array(
	array("name" => "Angie", "salary" => 1200),
	array("name" => "Jana", "salary" => 2000),
	array("name" => "Machi", "salary" => 1500),
);
$person = $people[0];
for ($i = 0; $i < count($people); $i = $i +1) {
     if ($people[$i]["salary"] > $person["salary"]) {
		$person = $people[$i];
	 }
}
echo "biggest salary has {$person['name']} is: {$person['salary']}<br />";



echo "<br /> ------------- Biggest salary in Accountant Department --------------------- <br /><br />";
$people = array(
	array("name" => "Pantzis", "salary" => 5500, "depatment" => "doctor"),
	array("name" => "Angie", "salary" => 1200, "depatment" => "accounting"),
	array("name" => "Jana", "salary" => 2000, "depatment" => "accounting"),
	array("name" => "Plastic", "salary" => 10000, "depatment" => "doctor"),
	array("name" => "Machi", "salary" => 1500, "depatment" => "accounting"),
);
// if i asign 0 will be doctor not accountant! if i asign 1rst tomorrow somebody will change order in peoples array\\
//we cannot guess. We asign 1rst accountant inside for AND NEXT time SKIPP because EMPTY() = will return false
$person = array();
for ($i = 0; $i < count($people); $i = $i +1) {
	if ($people[$i]["depatment"] == "accounting") {
		if(empty($person)) {
			$person = $people[$i];
		}
		
		if ($people[$i]["salary"] > $person["salary"]) {
			$person = $people[$i];
		}
	}
}
echo "biggest salary in ACCOUNTING has {$person['name']} is: {$person['salary']}<br />";
