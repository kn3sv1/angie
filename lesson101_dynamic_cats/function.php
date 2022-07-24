<?php
$cats = [
    [
        'name' => 'Paphos1',
        'city' => 'Paphos',
        'isFavourite' => true,
        'isFavForCity' => false,
        'age' => 2,
        'main_photo' => 'images/paphos/paphos1.png',
        'gallery' => [
            'images/paphos/paphos1/photo1.png',
            'images/paphos/paphos1/photo2.png',
        ],
    ],
    [
        'name' => 'Paphos2',
        'city' => 'Paphos',
        'isFavourite' => false,
        'isFavForCity' => false,
        'age' => 3,
        'main_photo' => 'images/paphos/paphos2.png',
        'gallery' => [],
    ],
    [
        'name' => 'Paphos3',
        'city' => 'Paphos',
        'isFavourite' => false,
        'isFavForCity' => true,
        'age' => 4,
        'main_photo' => 'images/paphos/paphos3.png',
        'gallery' => [],
    ],
    [
        'name' => 'Paphos4',
        'city' => 'Paphos',
        'isFavourite' => false,
        'isFavForCity' => false,
        'age' => 2,
        'main_photo' => 'images/paphos/paphos4.png',
        'gallery' => [],
    ],
    [
        'name' => 'Paphos5',
        'city' => 'Paphos',
        'isFavourite' => false,
        'isFavForCity' => true,
        'age' => 5,
        'main_photo' => 'images/paphos/paphos5.png',
        'gallery' => [
            'images/paphos/paphos5/photo1.png',
            'images/paphos/paphos5/photo2.png',
        ],
    ],

    [
        'name' => 'Amanda',
        'city' => 'Larnaka',
        'isFavourite' => true,
        'isFavForCity' => true,
        'age' => 2,
        'main_photo' => 'images/larnaka/amanda.png',
        'gallery' => [
            'images/larnaka/cleopatra.png',
            'images/larnaka/lazy.png',
        ],
    ],
    [
        'name' => 'Angry Roma',
        'city' => 'Larnaka',
        'isFavourite' => false,
        'isFavForCity' => true,
        'age' => 3,
        'main_photo' => 'images/larnaka/angry_roma.png',
        'gallery' => [],
    ],
    [
        'name' => 'Cleopatra',
        'city' => 'Larnaka',
        'isFavourite' => false,
        'isFavForCity' => false,
        'age' => 4,
        'main_photo' => 'images/larnaka/cleopatra.png',
        'gallery' => [],
    ],
    [
        'name' => 'Lazy',
        'city' => 'Larnaka',
        'isFavourite' => false,
        'isFavForCity' => false,
        'age' => 2,
        'main_photo' => 'images/larnaka/lazy.png',
        'gallery' => [],
    ],
    [
        'name' => 'Snowy',
        'city' => 'Larnaka',
        'isFavourite' => false,
        'isFavForCity' => false,
        'age' => 6,
        'main_photo' => 'images/larnaka/snowy.png',
        'gallery' => [],
    ],
    [
        'name' => 'Blacky',
        'city' => 'Limassol',
        'isFavourite' => true,
        'isFavForCity' => false,
        'age' => 2,
        'main_photo' => 'images/limassol/blacky.png',
        'gallery' => [
            'images/limassol/butterfly.png',
            'images/limassol/ginger.png',
        ],
    ],
    [
        'name' => 'butterfly',
        'city' => 'Limassol',
        'isFavourite' => false,
        'isFavForCity' => true,
        'age' => 2,
        'main_photo' => 'images/limassol/butterfly.png',
        'gallery' => [],
     ],
    [
        'name' => 'ginger',
        'city' => 'Limassol',
        'isFavourite' => false,
        'isFavForCity' => true,
        'age' => 1,
        'main_photo' => 'images/limassol/ginger.png',
        'gallery' => [],
    ],
    [
        'name' => 'lepeard',
        'city' => 'Limassol',
        'isFavourite' => false,
        'isFavForCity' => false,
        'age' => 5,
        'main_photo' => 'images/limassol/lepeard.png',
        'gallery' => [],
    ],
    [
        'name' => 'tiger',
        'city' => 'Limassol',
        'isFavourite' => false,
        'isFavForCity' => false,
        'age' => 3,
        'main_photo' => 'images/limassol/tiger.png',
        'gallery' => [],
    ],
];

function getCatsByCity($cats, $city) {
    $data = [];
    foreach ($cats as $cat) {
        if ($cat['city'] == $city) {
            $data[] = $cat;
        }
    }
    return $data;
}

function getFavouriteCats($cats) {
    $data = [];
    foreach ($cats as $cat) {
        if ($cat['isFavourite']) {
            $data[] = $cat;
        }
    }
    return $data;
}

function getFavCatsCity($cats, $city) {
    $data = [];
    foreach ($cats as $cat) {
        if ($cat['isFavForCity'] && $cat['city'] == $city) {
            $data[] = $cat;
        }
    }
    return $data;
}

function findCatByName($cats, $name) {
    foreach ($cats as $cat) {
        if ($cat['name'] == $name) {
            return $cat;
        }
    }

    return null;
}

function getCatsArray() {
    $file = 'data/cats.json';
    $cats = [];
    if (file_exists($file)) {
        $json = file_get_contents($file);
        $cats = json_decode($json, true);
    }
    return $cats;
}

function saveCatsArray($cats) {
    $file = 'data/cats.json';
    $json = json_encode($cats, JSON_PRETTY_PRINT);
    file_put_contents($file, $json);
}

//$lima = getCatsByCity($cats, 'Limassol');
//print_r($lima);