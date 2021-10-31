<?php

$numbers = array(6, 7, 4, 8);
$max = $numbers[0];

for ($i = 1; $i < count($numbers); $i++) {
	echo "curent number is {$numbers[$i]}<br />";
	if ($max < $numbers[$i]) {
		echo "now we are inside IF number max=$max, numbers[$i]={$numbers[$i]}<br />";
		$max = $numbers[$i];
		echo "max = $max<br />";
	}	
	echo "END OF ITERATION: $i ---------------<br /><br />";	
}

echo "<br /><br />FINAL max = $max<br />";

