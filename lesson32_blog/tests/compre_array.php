<?php

//If all numbers from $numbers2 exist in first array
$numbers1 = [1,2,3,4,5];
$numbers2 = [1,3,4];

//we think that by default it exists because it is more convenient for us to find true false
$existAll = true;
for ($i = 0; $i < count($numbers2); $i++) {
    //$exist is local for one number in array not all of them
    $exists = false;
    for ($j = 0; $j < count($numbers1); $j++) {
        if ($numbers2[$i] == $numbers1[$j]) {
            $exists = true;
            break;
        }
    }

    if ($exists === false) {
        $existAll = false;
        break;
    }
}

var_dump($existAll);