<?php

/**
 * here i read from file and convert json to array
 * @return array|mixed
 */
function getPeople() {
    $file = "data/people.json";
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
 * @param array $people
 */
function savePeople(array $people) {
    $file = "data/people.json";
    $json = json_encode($people, JSON_PRETTY_PRINT);
    file_put_contents($file, $json);
}

/**
 * we need this function to generate next unique id for people
 * @param array $people
 * @return int|mixed
 */
function getNextId(array $people) {
    $keys = array_keys($people);
    foreach ($keys as $index => $key) {
        $keys[$index] = intval($key);
    }
    //print_r($keys);
    $newID = max($keys) + 1;
    //print_r($newID);

    return $newID;
}

/*
$people = [
    "88355" => [
        "name" => 'Angella',
        "surname" => "Neo",
        "friends" => ["9000", "11000",],
        "enemies" => ["12000", "10000",]
    ],
    "9000" => [
        "name" => 'Savvi',
        "surname" => "Fushini",
        "friends" => ["10000", "11000",],
        "enemies" => ["88355", "12000",]
    ],
    "10000" => [
        "name" => 'Katerina',
        "surname" => "Demitridou",
        "friends" => ["88355", "11000",],
        "enemies" => ["9000", "12000",]
    ],
    "11000" => [
        "name" => 'Andreas',
        "surname" => "Pantazis",
        "friends" => ["10000",],
        "enemies" => ["9000", "12000",]
    ],
    "12000" => [
        "name" => 'SILIA',
        "surname" => "Malaka",
        "friends" => [],
        "enemies" => []
    ],
];
*/

//here i temperarely wrote code to convert array to json string then i copied from browser(view-source)
//and pasted it in my specific file from where i load fruits.
//echo json_encode($people, JSON_PRETTY_PRINT);
//die();

