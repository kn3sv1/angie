<?php

require_once 'classes/Cat.php';
require_once 'classes/CatCollection.php';
#require_once 'function/cats.php';

$cats = array(
    new CatModel('TEDAKI', 'white & black', 3),
    new CatModel('AMANDA', 'red', 10),
    new CatModel('Siara', 'red', 10),
    new CatModel('Ginger', 'red', 4),
    new CatModel('Hitler', 'red', 5),
    new CatModel('Gucci', 'red', 12),
    new CatModel('Betmen', 'red', 5),
    new CatModel('Tedy', 'red', 3),
);


$collection = new CatCollection($cats);

//$grouped = groupCatsByAge($cats);
$grouped = $collection->groupCatsByAge();
echo '<pre>';
print_r($grouped);


echo '<br />--------------getCatsByAgeEqual----------------<br />';
//$grouped = getCatsByAgeEqual($cats, 10);
$grouped = $collection->getCatsByAgeEqual(10);
echo '<pre>';
print_r($grouped);