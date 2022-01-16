<?php
header('Content-Type: application/json; charset=utf-8');

function loadCars() {
	$file = 'cars.txt';
	$cars = array();	
	if (file_exists($file)) {
		$my_text = file_get_contents($file);
		$cars = json_decode($my_text, true);
	}
	return $cars;
}

function saveCars($cars) {
	$file = 'cars.txt';
	$my_string = json_encode($cars,  JSON_PRETTY_PRINT);
	file_put_contents($file, $my_string);
}

//EXAMPLE
/*
$cars = [
	['name'=> 'Kia', 'year'=> 2000, 'color' => 'black'],
	['name'=> 'Volvo', 'year'=> 1983, 'color' => 'red'],
	['name'=> 'BMW', 'year'=> 1990, 'color' => 'white'],
	['name'=> 'Toyota', 'year'=> 2000, 'color' => 'black'],
];
*/
$cars = loadCars();

if (!empty($_GET['action']) && $_GET['action'] == 'add_car' && !empty($_POST['car'])) {
	$new_car = $_POST['car'];
	
	foreach($cars as $car) {
		if ($car['name'] == $new_car['name']) {
			echo json_encode(['operation' => 'error', 'text' => "Car with name:'{$new_car['name']}' already exists!"]);
			exit;
		}
	}
	
	
	
	$cars[] = $new_car;
	saveCars($cars);
	echo json_encode(['operation' => 'success', 'text' => 'Car was successfully added!']);
}


if (!empty($_GET['action']) && $_GET['action'] == 'all_cars') {
	echo json_encode($cars);
}

if (!empty($_GET['action']) && $_GET['action'] == 'get_by_name' && !empty($_GET['name'])) {
	$filtered = [];
	foreach($cars as $car) {
		if ($car['name'] == $_GET['name']) {
			$filtered[] = $car;
		}
	}
	echo json_encode($filtered);
}


if (!empty($_GET['action']) && $_GET['action'] == 'get_by_year' && !empty($_GET['year'])) {
	$filtered = [];
	foreach($cars as $car) {
		if ($car['year'] == $_GET['year']) {
			$filtered[] = $car;
		}
	}
	echo json_encode($filtered);
}