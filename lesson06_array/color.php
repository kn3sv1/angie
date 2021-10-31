<?php

$students = array(
	array("name" => "Angie", "color" => "purple"),
	array("name" => "George", "color" => "green"),
	array("name" => "Roma", "color" => "blue"),
	array("name" => "Katerina", "color" => "yellow"),
	
);

for ($i = 0; $i <count($students); $i = $i +1) {
	//<p style="color:red;">I am red</p>
	//echo '<p style="color:red;">' . $students[$i]["name"] . '</p>';
	//echo '<p style="color:' . $students[$i]["color"] . ';">' . $students[$i]["name"] . '</p>';
	
	
	$size = 30;
	if($students[$i]["color"] == "green") {
		$size = 50;
	} elseif ($students[$i]["name"] == "George") {
		$size = 40;
	} elseif ($students[$i]["name"] == "Katerina") {
		$size = 60;
	}	
	
	
	/*
	echo '<div style="font-size:' . $size . 'px;color:' . $students[$i]["color"] . ';">' . $students[$i]["name"] . '</div>';
		else { 
	echo '<p style="font-size:' . $size . 'px;color:' . $students[$i]["color"] . ';">' . $students[$i]["name"] . '</p>';
	}
	*/
	
	if ($students[$i]["color"] == "green") {
		echo '<div style="font-size:' . $size . 'px;color:' . $students[$i]["color"] . ';">' . $students[$i]["name"] . '</div>';
	} else {
		echo '<p style="font-size:' . $size . 'px;color:' . $students[$i]["color"] . ';">' . $students[$i]["name"] . '</p>';
	}
}	


/*
if (0) {
	echo 1;
} else {
	echo 2;
}
*/