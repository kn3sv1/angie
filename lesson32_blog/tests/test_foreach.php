<?php

$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $key => $value) {
    $colors[$key] = $value . " new";
}
//value is copy of array
//we change value in array by adding key to find specific values in array
echo  '<pre>';
print_r($colors);


//foreach ($colors as $value) {
//    $value = $value . " new";
//}
////value is copy of array
//echo  '<pre>';
//print_r($colors);