<?php

require_once 'classes/Cat.php';
require_once 'classes/Dog.php';
require_once 'classes/Person.php';

//array of different objects related to classes
$animals = array(
    new Cat('TEDAKI', 'white & black', 3),
    new Cat('AMANDA', 'red', 14),
    new Dog('Stiven', 10),
);
$person = new Person('Angie', $animals);
$person->printAnimals();

//foreach ($animals as $animal) {
//    if ($animal instanceof Cat) {
//        echo "<br />I have cat called $animal->name <br />";
//    }
//    if ($animal instanceof Dog) {
//        echo "<br />I have dog called $animal->name and his age is $animal->age <br />";
//    }
//}