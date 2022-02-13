<?php

define("ROOT", __DIR__);

/**
 * here i read from file and convert json to array
 * @return array|mixed
 */
function getCats() {
    return getFromFile(ROOT . "/data/cats.json");
}

/**
 * here i convert array to string and save in file
 * @param array $cats
 */
function saveCats(array $cats) {
    saveToFile($cats, ROOT . "/data/cats.json");
}

function getColors() {
    return getFromFile(ROOT . "/data/colors.json");
}

function saveColors(array $colors) {
    saveToFile($colors, ROOT . "/data/colors.json");
}


function getFromFile($file) {
    $data = array();
    if (file_exists($file)) {
        //we use only once to get array!!!!!!!!!!!!!!!!!!!
        $json = file_get_contents($file);
        $data = json_decode($json,true);
        if (!is_array($data)) {
            return [];
        }
    }

    return $data;
}

function saveToFile(array $data, $file) {
    $json = json_encode($data, JSON_PRETTY_PRINT);
    file_put_contents($file, $json);
}

/**
 * we need this function to generate next unique id for people
 * @param array $data
 * @return int|mixed
 */
function getNextId(array $data) {
    if (empty($data)) {
        return 10000;
    }
    $keys = array_keys($data);
    foreach ($keys as $index => $key) {
        $keys[$index] = intval($key);
    }
    //print_r($keys);
    $newID = max($keys) + 1;
    //print_r($newID);

    return $newID;
}

