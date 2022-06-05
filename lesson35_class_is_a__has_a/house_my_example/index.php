<?php

require_once 'House.php';
require_once 'Chair.php';
require_once 'FushiniChair.php';
require_once 'MyTable.php';

$tables = [
    new MyTable('Living room table', 'light brown'),
    new MyTable('Dining room table', 'transparent'),
    new MyTable('kitchen table', 'transparent'),
];

$chairs = [
    new Chair('Living room chair', 'beige'),
    new Chair('Dining room chair', 'light beige'),
    new FushiniChair('kitchen chair', 'red'),
];

//$data = [];
//foreach ($tables as $table) {
//    if ($table->getColor() === 'transparent') {
//        $data[] = $table;
//    }
//}
//
//echo '<pre>';
//print_r($data);
//
//$data = [];
//foreach ($tables as $table) {
//    $color = $table->getColor();
//    //create key by color if it doesnt exist
//    if (!isset($data[$color])) {
//        $data[$color] = [];
//    }
//    //we use color as key and push inside all array
//    $data[$color][] = $table;
//}
//
//echo '<pre>';
//print_r($data);

$house = new House($chairs, $tables);
$house->printTables();
$house->printChairs();