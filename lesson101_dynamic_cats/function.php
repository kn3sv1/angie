<?php
$cats = [
    [
        'name' => 'Paphos1',
        'city' => 'Paphos',
        'isFavourite' => true,
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
        'age' => 3,
        'main_photo' => 'images/paphos/paphos2.png',
        'gallery' => [],
    ],
    [
        'name' => 'Paphos5',
        'city' => 'Paphos',
        'isFavourite' => false,
        'age' => 5,
        'main_photo' => 'images/paphos/paphos5.png',
        'gallery' => [
            'images/paphos/paphos5/photo1.png',
            'images/paphos/paphos5/photo2.png',
        ],
    ],

    [
        'name' => 'amanda',
        'city' => 'Larnaka',
        'isFavourite' => true,
        'age' => 2,
        'main_photo' => 'images/larnaka/amanda.png',
        'gallery' => [
            'images/larnaka/cleopatra.png',
            'images/larnaka/lazy.png',
        ],
    ],
    [
        'name' => 'blacky',
        'city' => 'Limassol',
        'isFavourite' => true,
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
        'age' => 2,
        'main_photo' => 'images/limassol/butterfly.png',
        'gallery' => [],
     ],
    [
        'name' => 'ginger',
        'city' => 'Limassol',
        'isFavourite' => false,
        'age' => 1,
        'main_photo' => 'images/limassol/ginger.png',
        'gallery' => [],
    ],
    [
        'name' => 'lepeard',
        'city' => 'Limassol',
        'isFavourite' => false,
        'age' => 5,
        'main_photo' => 'images/limassol/lepeard.png',
        'gallery' => [],
    ],
    [
        'name' => 'tiger',
        'city' => 'Limassol',
        'isFavourite' => false,
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

function findCatByName($cats, $name) {
    foreach ($cats as $cat) {
        if ($cat['name'] == $name) {
            return $cat;
        }
    }

    return null;
}

//$lima = getCatsByCity($cats, 'Limassol');
//print_r($lima);