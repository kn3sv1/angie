<?php


// https://www.geeksforgeeks.org/php-ternary-operator/
// https://www.w3schools.in/php/operators/ternary-operator/
// https://www.w3schools.com/php/php_operators.asp


$a = 1;
$b = 2;

//long code
if ($a < $b) {
	echo '<p style="color:green">bigger</p>';
} else {
	echo '<p style="color:green">less</p>';
}
//short code
echo ($a < $b)?  '<p style="color:red">bigger</p>' : '<p style="color:red">less</p>';


//long way
if ($a < $b) {
	$max = $b;
} else {
	$max = $a;
}

//short way. if $a less than $b return $b else return $a
$max = ($a < $b) ? $b : $a;

echo "<br />a=$a b=$b max=$max";