<?php


$cars = [
    ['color' => 'white', 'model' => 'Mercedes', 'owner' => 'Katerina Neophytou'],
    ['color' => 'grey', 'model' => 'BMW', 'owner' => 'Chitodolos'],
    ['color' => 'red', 'model' => 'Audi', 'owner' => 'George'],
    ['color' => 'black', 'model' => 'Toyota', 'owner' => 'Roman'],

    ['color' => 'black', 'model' => 'Mercedes', 'owner' => 'Angie Neo'],
    ['color' => 'black', 'model' => 'Toyota', 'owner' => 'Elena Krio'],

    ['color' => 'red', 'model' => 'Toyota', 'owner' => 'Angie Lopez'],

    ['color' => 'white', 'model' => 'Honda', 'owner' => 'Dimitris'],
];

// 1) group by color

//step 1: group by color

//$groupedCars = [
//    'white' => [
//    ]
//];

//$groupedCars = [
//    'white' => [
//        ['color' => 'white', 'model' => 'Mercedes', 'owner' => 'Katerina Neophytou'],
//        ['color' => 'white', 'model' => 'Honda', 'owner' => 'Dimitris'],
//    ]
//];

$groupedCars = [];
foreach ($cars as $car) {
    //lets get current color of car
    $model = $car['model'];
    //100% sure that we created key with that color and empty array
    if (!isset($groupedCars[$model])) {
        $groupedCars[$model] = [];
    }
    //we created that array to push car inside
    $groupedCars[$model][] = $car;
}

echo  '<pre>';
print_r($groupedCars);

