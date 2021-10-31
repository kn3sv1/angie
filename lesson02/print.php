<?php

$name = $_GET['name'];
$age = $_GET['age'];
$city = $_GET['city'];

echo "<p style='color:green'>Your name is: $name</p>";
echo "<p style='color:red'>Your age is: $age</p>";
echo "<p style='color:blue'>Your city is: $city</p>";

$hobbies = $_GET['hobbies'];
echo "<p>Hobbies:</p>";

for ($i = 0; $i < count($hobbies); $i = $i + 1) {
	echo $hobbies[$i], ", ";
}

echo "</p>";

$food = $_GET['food'];
echo "<p>Foods i like:</p>";
//var_dump($food);
for ($i = 0; $i < count($food); $i = $i + 1) {
	echo $food[$i], ", ";
}

echo "<br /><br />";
$cars = array("Toyota", "Volvo", "BMW"); 
//echo $cars[0], $cars[1], $cars[2];
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".";
echo "</p>";

echo "<br /><br />----ANGIE VERSION---------<br /><br />";

$cats = array("Tedaki", "Lucky", "Ginger", "Tedaki2", "Lucky2", "Ginger2", "Ginger3");

//echo "my cats: " . $cats[0] . ", " . $cats[1] . " and " . $cats[2] . ".";

echo "<p>my cats:</p>";
for ($i = 0; $i < count($cats); $i = $i + 1) {
	echo $cats[$i], ", ";
}
