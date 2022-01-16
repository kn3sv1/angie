<?php

$a = 1;
$b = 2;

$c = $a + $b;
$c = 1 + 2;
//echo $c;

$arr = array(1,2,3,20,50,60,70);
$idx = 5; //index
echo $arr[$idx];

echo '<br /><br />ADD<br />';
echo $arr[1] + $arr[3];


echo '<br /><br />INDEX inside ARRAY<br />';
$arr2 = array(1,2,3,20,50,60,70);
$idx2 = array(2,5); //index
echo $arr2[$idx2[0]]; //$idx2[0] = 2,  echo $arr2[2];
echo '<br />';
echo $arr2[$idx2[1]]; //$idx2[1] = 5,  echo $arr2[5]; // VARIABLE INSIDE VARIABLE
//echo $arr2[5];

$xxx = $idx2[1];
echo $arr2[$xxx]; // $arr2[$idx2[1]]



$arr3 = array(
    array('name' => 'Tedaki', 'city' => 'Limassol'),
    array('name' => 'Ginger', 'city' => 'Limassol'),
);