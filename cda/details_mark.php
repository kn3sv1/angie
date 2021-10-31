<?php
	
echo "<h1>Student name: " . $_GET["name"] . "</h1>";

$color = 'black';
if ($_GET["mark"] == "A") {
	$color = 'green';
} elseif ($_GET["mark"] == "B") {
	$color = 'blue';
} elseif ($_GET["mark"] >= "C") {
	$color = 'red';
}



echo "<h2 style='color:" . $color .  "'>Mark: " . $_GET["mark"] . "</h2>";