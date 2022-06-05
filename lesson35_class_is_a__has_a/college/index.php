<?php

require_once 'CDA.php';
require_once 'CyprusCollege.php';
require_once 'Student.php';
require_once 'EuroCollege.php';

$angie = new Student('Angie Neophytou', 'Secretary');
$roma = new Student('Roma Satanovsky', 'computer science');
$katerina = new Student('Katerina Neophytou', 'Secretary');
$george = new Student('George Neophytou', 'Forex');
$irini = new Student('Irini Diomidous', 'Business management');
$maria = new Student('Maria Papadopoulou', 'Beautician');


$college = new CDA([$angie, $roma, $katerina, $george]);
$college->printInfo();


$college2 = new CyprusCollege([$angie, $roma]);
$college2->printInfo();

$college3 = new EuroCollege([$irini, $maria]);
$college3->printInfo();