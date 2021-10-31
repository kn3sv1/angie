<?php

$food = array(
0 => array("name" => "pizza", "category" => "unhealthy", "angie" => 25, "color" => "green"),
1 => array("name" => "brown bread", "category" => "healthy", "angie" => 26, "color" => "brown"),
2 => array("name" => "hamburger", "category" => "unhealthy", "angie" => 18, "color" => "orange"),
3 => array("name" => "fruit", "category" => "healthy", "angie" => 25, "color" => "red"),
);
echo "<p style='text-align: center; color:red; font-size: 20'>TYPES OF FOOD:</p>";

for ($i = 0; $i < count($food); $i = $i+1) {
/*
	if($food[$i]["name"] == "fruit") {
		echo "<p style='color:green;font-size: " . $food[$i]["angie"] . "'>" . $food[$i]["name"] . " - " . $food[$i]["category"] . "</p>";
	} elseif ($food[$i]["name"] == "pizza") {
	    echo "<p style='color:red;font-size: " . $food[$i]["angie"] . "'>" . $food[$i]["name"]. " - " . $food[$i]["category"] . "</p>";
	} elseif ($food[$i]["name"] == "brown bread") {
	    echo "<p style='color:brown;font-size: " . $food[$i]["angie"] . "'>" . $food[$i]["name"]. " - " . $food[$i]["category"] . "</p>";
	} else {
		echo "<p style='font-size: " . $food[$i]["angie"] . "'>" . $food[$i]["name"] . " - " . $food[$i]["category"] . "</p>";
	}
*/	

echo "<p style='color:" . $food[$i]["color"] . ";font-size: " . $food[$i]["angie"] . "'>" . $food[$i]["name"] . " - " . $food[$i]["category"] . "</p>";
}	

