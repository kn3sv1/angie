<?php

$numbers = [1,2,3,4,5];


$isBigger = true;

for ($i = 0; $i < count($numbers); $i++) {
    if (isset($numbers[$i + 1]) && $numbers[$i] >  $numbers[$i + 1]) {
        $isBigger = false;
        break;
    }

}

var_dump($isBigger);