<?php



function getMax($numbers, $limit) {
	$max = null;
	for ($i = 0; $i < count($numbers); $i++) {
		//skip numbers bigger than 15
		if ($numbers[$i] > $limit) {
			continue;
		}
		//if we didnt set first number less than 15 set null
		if ($max == null) {
			$max = $numbers[$i];
		} elseif($max < $numbers[$i]) { //if its not null but digit compare with current array number 
			$max = $numbers[$i];
		}		
	}
	return $max;
}


$numbers1 = array(50, 5, 10, 3, 2, 6, 20, 9, 30);
$max1 = getMax($numbers1, 15);
echo "max1 = $max1 <br />";


$numbers2 = array(5000, 5, 10, 3, 12, 16, 200, 19, 30);
$max2 = getMax($numbers2, 17);
echo "max2 = $max2 <br />";


$numbers3 = array(50, 6, 6, 3, 14, 13, 200, 19, 30);
$max3 = getMax($numbers3, 9);
echo "max3 = $max3 <br />";



$numbers4 = array(50, 6, 6, 3, 14, 13, 200, 19, 30);
$max4 = max($numbers4);
echo "max4 = $max4 <br />";