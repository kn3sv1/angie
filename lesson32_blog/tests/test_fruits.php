<?php


$fruits = [
    ['color' => 'white', 'name' => 'banana'],
    ['color' => 'green', 'name' => 'apple'],
    ['color' => 'green', 'name' => 'watermelon'],
    ['color' => 'orange', 'name' => 'orange'],
    ['color' => 'yellow', 'name' => 'lemon'],
];

$groupedFruits = [];

foreach ($fruits as $fruit) {
    $color = $fruit['color'];
    if (!isset($groupedFruits[$color])) {
        $groupedFruits[$color] = [];
    }
   $groupedFruits[$color][] = $fruit;
}

echo  '<pre>';
print_r($groupedFruits);