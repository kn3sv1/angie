<?php

$a1 = 30;
$b2 = 30;
$c = $a1 + $b2;
//echo $c;
//echo "<br />";	

//$c = $c + 10;

//echo "<p style='color:red'>result equal: $c</p>";
/*
if ($i <= 10) {
	echo $i; //3
	echo "<br />";	
	$i = $i + 2; // 5
}
*/

if ($c <= 50) {
	echo "<p style='color:red'>result equal: $c</p>";
}

if ($c > 50) {
	echo "<p style='color:green'>result equal: $c</p>";
	echo "<p style='color:blue'>good bye</p>";
}



for ($i = 0; $i < 10; $i = $i + 1) {
	echo "<p style='color:red'>good bye $i</p>";
}


for ($i = 0; $i < 10; $i = $i + 1) {
	if($i == 5) {
		echo "<p style='color:green'>hello $i</p>";
	}
	
	if($i == 8) {
		echo "<p style='color:green'>hello2222222222 $i</p>";
	}
}