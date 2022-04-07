<?php

//Find common fruits with the same name

$fruits1 = [
    ['color' => 'white', 'name' => 'banana'],
    ['color' => 'green', 'name' => 'apple'],
    ['color' => 'green', 'name' => 'watermelon'],
    ['color' => 'orange', 'name' => 'orange'],
    ['color' => 'yellow', 'name' => 'lemon'],
];
$fruits2 = [
    ['color' => 'orange', 'name' => 'watermelon'],
    ['color' => 'green', 'name' => 'orange'],
    ['color' => 'yellow', 'name' => 'lemon3'],
];

$result = [
    ['color' => 'white', 'name' => 'banana'],
    ['color' => 'green', 'name' => 'apple'],
    //
    ['color' => 'orange', 'name' => 'watermelon'],
    ['color' => 'green', 'name' => 'orange'],
    ['color' => 'yellow', 'name' => 'lemon'],
];

$commonFruits = [];
foreach ($fruits1 as $fruit) {
    foreach ($fruits2 as $fruit1) {
        $name = '';
        if ($fruit['name'] == $fruit1['name']) {
            $name = $fruit['name'];
            if (!isset($commonFruits[$name])) {
                $commonFruits[$name] = [];
            }
            $commonFruits[$name][] = $fruit;
        }
    }

}

echo  '<pre>';
print_r($commonFruits);