<?php

/*
$fruits = [
    ['width' => 260, 'src' => 'photos/apples.png', 'name' => 'apples', 'description' => 'apples description'],
    ['width' => 260, 'src' => 'photos/banana.png', 'name' => 'banana', 'description' => 'banana description'],
    ['width' => 260, 'src' => 'photos/blueberries.png', 'name' => 'blueberries', 'description' => 'blueberries description'],
    ['width' => 260, 'src' => 'photos/cherries.png', 'name' => 'cherries', 'description' => 'cherries description'],
    ['width' => 260, 'src' => 'photos/grapefruit.png', 'name' => 'grapefruit', 'description' => 'grapefruit description'],
    ['width' => 260, 'src' => 'photos/kiwis.png', 'name' => 'kiwis', 'description' => 'kiwis description'],
];
//here i temperarely wrote code to convert array to json string then i copied from browser(view-source)
//and pasted it in my specific file from where i load fruits.
echo json_encode($fruits, JSON_PRETTY_PRINT);
die();
*/
$fruits = getFruits();

/**
 * here i read from file and convert json to array
 * @return array|mixed
 */
function getFruits() {
    $file = "data/fruits.json";
    $fruits = array();
    if (file_exists($file)) {
        //we use only once to get array!!!!!!!!!!!!!!!!!!!
        $json = file_get_contents($file);
        $fruits = json_decode($json,true);
    }

    return $fruits;
}

/**
 * here i convert array to string and save in file
 * @param array $fruits
 */
function saveFruits(array  $fruits) {
    $file = "data/fruits.json";
    $json = json_encode($fruits, JSON_PRETTY_PRINT);
    file_put_contents($file, $json);
}

function getHello() {
    return '<span style="background-color: #00ccff">Hello from PHP! Current time is:' . date('Y-m-d h:i:s') . '</span><br />';
}

function getBackgroundColor() {
    $backgroundColor = 'powderblue';
    $minute = date('i');
    //print_r($minute);
    if ($minute > 15 && $minute < 20) {
        $backgroundColor = '#42f2f5';
    } elseif ($minute >= 20 && $minute < 30) {
        $backgroundColor = '#4842f5';
    } elseif ($minute >= 30 && $minute < 59) {
        $backgroundColor = '#f57242';
    }

    return $backgroundColor;
}
