<?php

//we want to change array sorting by length first name + last name
$cats = [
    ['weight' => 56, 'name' => 'Tedaki', 'surname' => 'Neophytou'],
    ['weight' => 6, 'name' => 'Ginger', 'surname' => 'Dem'],
    ['weight' => 79, 'name' => 'Amanda', 'surname' => 'P'],
    ['weight' => 8, 'name' => 'Gitler', 'surname' => 'Panayotta'],
];
//TedakiNeophytou = 15 characters
//GingerDem = 9 characters

function compare($a, $b) {
    $weight1 = strlen($a["name"] . $a["surname"]);
    $weight2 = strlen($b["name"] . $b["surname"]);

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
}

//a is one cat b is another cat
usort($cats, "compare");

echo '<pre>';
print_r($cats);