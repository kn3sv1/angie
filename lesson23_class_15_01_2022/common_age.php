<?php

require_once 'classes/Cat.php';
require_once 'classes/CatCollection.php';
#require_once 'function/cats.php';

$cats = array(
    new Cat('TEDAKI', 'white & black', 3),
    new Cat('AMANDA', 'red', 10),
    new Cat('Siara', 'red', 10),
    new Cat('Ginger', 'red', 4),
    new Cat('Hitler', 'red', 5),
    new Cat('Gucci', 'red', 12),
    new Cat('Betmen', 'red', 5),
    new Cat('Tedy', 'red', 3),
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