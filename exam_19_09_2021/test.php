<?php
$numbers = array(-50, -5, -10, -3, -10, -6, -20, -9, -30);
$max = null;
//$maxIndex = null;

for ($i = 0; $i < count($numbers); $i++) {
	//skip numbers bigger than 15
	if ($numbers[$i] < -15) {
		continue;
	}
	//if we didnt set first number less than 15 set null
	if ($max == null) {
		$max = $numbers[$i];
	} elseif ($max < $numbers[$i]) {
	$max = $numbers[$i];
	//maxIndex = $i;
	} 
}

echo "max = $max";

?>