<?php
    $fruits = [
        ['width' => 260, 'src' => 'photos/apples.png', 'name' => 'apples', 'description' => 'apples description'],
        ['width' => 260, 'src' => 'photos/banana.png', 'name' => 'banana', 'description' => 'banana description'],
        ['width' => 260, 'src' => 'photos/blueberries.png', 'name' => 'blueberries', 'description' => 'blueberries description'],
        ['width' => 260, 'src' => 'photos/cherries.png', 'name' => 'cherries', 'description' => 'cherries description'],
        ['width' => 260, 'src' => 'photos/grapefruit.png', 'name' => 'grapefruit', 'description' => 'grapefruit description'],
        ['width' => 260, 'src' => 'photos/kiwis.png', 'name' => 'kiwis', 'description' => 'kiwis description'],
    ];

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
