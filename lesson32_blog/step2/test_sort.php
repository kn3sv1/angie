<?php

//we want to change array sorting by weight
$cats = [
    ['weight' => 56, 'name' => 'Tedaki'],
    ['weight' => 6, 'name' => 'Ginger'],
    ['weight' => 79, 'name' => 'Amanda'],
    ['weight' => 8, 'name' => 'Gitler'],
];

//a is one cat b is another cat
usort($cats, function ($a, $b) {
    $weight1 = $a["weight"];
    $weight2 = $b["weight"];

    if ($weight1 == $weight2) {
        return 0;
    }

    if ($weight1 > $weight2) {
        //return anything less than 0
        return -1;
    } else {
        //return anything bigger than 0
        return 1;
    }
    //short form of previous if else statement
    //return ($weight1 > $weight2) ? -1 : 1;
});

echo '<pre>';
print_r($cats);