<?php

require_once 'classes/Cat.php';

function eatFood(Cat $cat, $food) {
    echo "<br />FUNCTION: I am $cat->name and I am eating $food</br />";
}

$tedaki = new Cat('TEDAKI', 'white & black', 3);
//$tedaki->name = 'TEDAKI';
//$tedaki->color = 'white & black';
//$tedaki->age = 3;

//print_r($tedaki);

$amanda = new Cat('AMANDA', 'red', 14);
//$amanda->name = 'AMANDA';
//$amanda->color = 'red';
//$amanda->age = 14;


$tedaki->eat('MEAT...');
$tedaki->eat('DRY FOOD...');
//not professional if function work with only cat we should move it to class
//so another programmer will understand code better
eatFood($tedaki, 'MILK');

$tedaki->speakAndEat('PANTAZIS...');

$amanda->eat('FISH!!!');

//print_r($amanda);

//$cats = array($tedaki, $amanda);
//
//echo '<br /><br /><br />';
///** @var Cat $cat */
//foreach ($cats as $cat) {
//    echo "age: $cat->age color: {$cat->color}";
//    $cat->speak();
//    echo '<br /><br />';
//}