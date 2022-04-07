<?php

if (empty($_GET['controller']) || empty($_GET['action'])) {
    die( '<p style="color: red">PLEASE PROVIDE CONTROLLER</p>');
}
$action = $_GET['action'] . 'Action';


//Cat
$controllerName = ucfirst($_GET['controller']);

//CatController
$class = $controllerName . 'Controller';

//include_once 'CatController.php';
include_once  $class . '.php';
/*
if ($_GET['controller'] === 'cat') {
    include_once 'CatController.php';
    $class = 'CatController';
}
*/
$object = new $class();
$object->$action();
