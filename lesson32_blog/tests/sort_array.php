<?php

//Sort numbers in array from smallest to biggest

$numbers1 = [1,2,30,4,5];

usort($numbers1, function ($a, $b) {
    if ($a==$b) return 0;
    //ternary
    return ($a<$b)?-1:1;
});

print_r($numbers1);