<?php

function validateErrors($userErrors, $key) {
    if (empty($_POST[$key])) {
        $userErrors[$key] = "*Required field";
    } elseif (strlen($_POST[$key]) < 3) {
        $userErrors[$key] = "Characters need to be more than 3";
    }
        return $userErrors;
}

function printErrors($userErrors, $key) {
    if (!empty($userErrors[$key])) {
        echo '<span style="color: red">' . $userErrors[$key] . '</span>';
    }

}

function cats_info() {
    $file = "cats/data.json";
    $cats = array();
    if (file_exists($file)) {
        $json = file_get_contents($file);
        $cats = json_decode($json, true);
    }
    return $cats;
}
//we need to turn into json format the array in order to use function file_put_contents(). To save in file
function saveArray ($catsInfo) {
    $file = "cats/data.json";
    $json = json_encode($catsInfo, JSON_PRETTY_PRINT);
    file_put_contents($file, $json);

}
