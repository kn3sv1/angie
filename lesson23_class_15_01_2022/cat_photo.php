<?php

require_once 'classes/Cat.php';

//$cat = new Cat('TEDAKI', 'white & black', 3, 'tedaki.png');
//$cat->print();



$cats = array(
    new CatModel('TEDAKI', 'white & black', 3, 'tedaki.png'),
    new CatModel('AMANDA', 'red', 10),
    new CatModel('Siara', 'red', 10),
    new CatModel('Ginger', 'red', 4, 'ginger.png'),
    new CatModel('Hitler', 'red', 5),
    new CatModel('Gucci', 'red', 12),
    new CatModel('Betmen', 'red', 5),
    new CatModel('Tedy', 'red', 3),
);

/** @var CatModel $cat */
foreach ($cats as $cat) {
    if ($cat->name == 'AMANDA') {
        $cat->setPhoto('lucky.png');
        $cat->setAge(99);
    }
    if ($cat->name == 'TEDAKI') {
        $cat->removePhoto();
    }
    $cat->print();
}

