<?php

//CDA atudents
$students = array("Katerina", "Roman", "Angie", "Tamila");

$my_name = "Angie";

//$my_name = $_GET["my_name"];

$is_in_list = false;
for ($i = 0; $i < count($students); $i = $i + 1) {
	if ($my_name == $students[$i]) {
		//echo "I am student<br />";
		$is_in_list = true;
	}
} 


if ($is_in_list == true) {
	echo "I am student";
} else {
	echo "I am NOT student";
}