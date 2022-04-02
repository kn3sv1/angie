<?php

function getTopMenuArray() {
    return getArrayFromFile("data/top-menu.json");
}

function saveTopMenuToFile($arr) {
    saveArrayToFile("data/top-menu.json", $arr);
}

function getFooterMenuArray() {
    return getArrayFromFile("data/footer-menu.json");
}

function saveFooterMenuToFile($arr) {
    saveArrayToFile("data/footer-menu.json", $arr);
}


function getArrayFromFile($file) {
    //$file = "cats/data.json";
    $data = array();
    if (file_exists($file)) {
        $json = file_get_contents($file);
        $data = json_decode($json, true);
    }
    return $data;
}

function saveArrayToFile($file, $arr) {
    //$file = "cats/data.json";
    $json = json_encode($arr, JSON_PRETTY_PRINT);
    file_put_contents($file, $json);
}
