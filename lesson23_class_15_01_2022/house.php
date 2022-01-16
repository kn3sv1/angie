<?php

require_once 'classes/House/House.php';
require_once 'classes/House/Door.php';
require_once 'classes/House/Window.php';
require_once 'classes/House/ToiletWindow.php';


//encapsulation - when object has another object - google MORE!
// https://www.javatpoint.com/php-oops-encapsulation
// https://www.educba.com/encapsulation-in-php/
// https://www.geeksforgeeks.org/php-encapsulation/

//HOMEWORK ADD PHOTOS EVERYWHERE

$door = new Door('Brown', '3 meters', 'photo-door.png');
$windows = [
    new Window('2x2 meters in GuestRoom', 'living_room_window.png'),
    new Window('1x1 meters in bathroom', 'bathroom_window.png'),
    new Window('1x1 meters in bedroom', 'bedroom_window'),
    new Window('0.5x1 meters in toilet'),
    new ToiletWindow('0.5x1 meters in toilet'),
];
$angie_house = new House($door, $windows);
$angie_house->print();
