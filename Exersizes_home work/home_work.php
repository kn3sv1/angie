
<?php

//EXERSIZE 1): From array of numbers find all bigger than 25

$numbers = array(5, 14,16, 30, 20, 66, 15, 10, 26, 77, 2, 100);
$max = array();

for ($i = 0; $i < count($numbers); $i++) {
	
	if ($numbers[$i] > 25) {
	$max[] = $numbers[$i];	

}

}
echo '<pre>';
echo "The bigest numbers are:  <br />";	
print_r($max);

echo "<br />------------EXERSIZE 2-----------------------<br />\n";


$numbers_2 = array(5, 10, 22, 25, 15, 14, 40, 6, 12, 9, 20, 18, 55, 68, 70);
$answer = array();

for ($a = 0; $a < count($numbers_2); $a++) {
	
	if ($numbers_2[$a] > 10 && $numbers_2[$a] < 20) {
	$answer[] = $numbers_2[$a];	
		
}		
	
}	
echo '<pre>';
print_r($answer);

echo "<br />-------------EXERSIZE 3----------------------<br />\n";


$numbers_3 = array(5, 10, 22, 25, 15, 14, 40, 6, 12, 9, 20, 18, 55, 68, 70);
$answer_2 = array();

for ($j = 0; $j < count($numbers_3); $j++) {
	
	if ($numbers_3[$j] < 10 || $numbers_3[$j] > 50) {
		$answer_2[] = $numbers_3[$j];	
	}		
	
}
echo '<pre>';
print_r($answer_2);	

echo "<br />-------------EXERSIZE 3----------------------<br />\n";

$names = array("Angie", "Roma", "George", "andria", "Tamila", "Irini", "Anastasia", "Theodora", "Anna");
$answer_3 = array();
for ($b = 0; $b < count($names); $b++) {
	$position = stripos($names[$b], "A");
	if ($position === 0) {
		$answer_3[] = $names[$b];	
	}		
}
echo '<pre>';
print_r($answer_3);	


echo "<br />-------------EXERSIZE 4----------------------<br />\n";

if (0 == false) {
	echo "1111111111111111";
}
