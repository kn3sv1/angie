<?php

//https://www.w3spoint.com/php-default-arguments

function my_config($key = 'roma')
{
    $arr = [
        'angie' => 'stupid',
        'roma' => 'clever',
    ];

    return isset($arr[$key]) ? $arr[$key] : null;
}

echo '<pre>';
$result = my_config();
var_dump($result);

$result = my_config('angie');
var_dump($result);