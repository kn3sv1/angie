<?php

include 'angie_funtions.php';
echo '<pre>';

$total = add2(1,4);
echo $total, "<br />";

$total = minus(10,6);
echo $total, "<br />";

$total = sum_array(array(1,9,10,5, 3));
echo "Sum numbers in array is: ", $total, "<br />";

$total = sum_array_bigger(array(1,9,10,5), 7);
echo "Sum numbers in array bigger that 7 is: ", $total, "<br />";

$max = find_max_in_array(array(1,9,10,5));
echo "max in array is: ", $max, "<br />";

$max = find_max_in_array_bigger(array(1,9,10,5), 7);
echo "max in array bigger that 7 is: ", $max, "<br />";


$names = replace_in_array(array("Jana", "Angie", "Katerina"));
print_r($names); //"Katerina" ->"Skato"
echo "<br />";

$numbers = replace_in_array_to(array(5, 0, -20, 40, -1, 6), 0);
print_r($numbers); 
echo "<br />";

//add bonus 10% from salary. Answer: 1200 + 10%(120) = 1320  
$salaries = salary_plus_bonus_pantazis(array(1200, 1500, 3000), 10);
print_r($salaries); 
echo "<br />";

myFunction("Angie");
myFunction("Roma");
myFunction("George");
myFunction("Katerina");


///example 20 in sentense "I am from Limassol" find amount of each letter
///example 21 generatw array from numner1 to number2 each next multiple by 2: $result = array(1,2,4,8,16,32,64,128);