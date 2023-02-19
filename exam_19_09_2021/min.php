<?php
$numbers = array(50, 5, 10, 30, 10, 6, 20, 10, 9, 30);
$min = null;

for ($i = 0; $i < count($numbers); $i++) {
	if ($min == null) {
	   $min = $numbers[$i];//
    }
	if ($min > $numbers[$i]) {
	    $min = $numbers[$i];
    }
}

echo "min = $min ";
