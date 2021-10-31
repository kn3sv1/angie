<?php

// http://html5.local/angie/lesson07_calculator/?number1=10&number2=5&operation=add

function isNumber($number, $text) {
	if (!is_numeric($number)) {
		echo "<p style='color:red'>$text is not number!</p>";
		die();
	}
}


//validation for correct data
if (empty($_GET['number1']) || empty($_GET['number2']) || empty($_GET['operation'])) {
	echo "<p style='color:red'>Please provide ARGUMENTS!</p>";
	die();
}
/*
if (!is_numeric($_GET['number1'])) {
	echo "<p style='color:red'>number1 is not number!</p>";
	die();
}

if (!is_numeric($_GET['number2'])) {
	echo "<p style='color:red'>number2 is not number!</p>";
	die();
}
*/

isNumber($_GET['number1'], 'number1');
isNumber($_GET['number2'], 'number2');


$number1 = $_GET['number1'];
$number2 = $_GET['number2'];
$operation = $_GET['operation'];

if ($operation == "add") {
	$result = $number1 + $number2;
	//echo $result;
	echo $number1 . " + " . $number2 . " = " . $result . ";";
} elseif ($operation == "minus") {
	$result = $number1 - $number2;
	echo $number1 . " - " . $number2 . " = " . $result . ";";
} elseif ($operation == "multiply") {
	$result = $number1 * $number2;
	echo $number1 . " * " . $number2 . " = <span style='color:green;font-weight:bold'>" . $result . "</span>;";
}	else {
	echo "<p style='color:red'>Operation is not suported!</p>";
}