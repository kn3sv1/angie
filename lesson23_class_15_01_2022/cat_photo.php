<?php

require_once 'classes/Cat.php';

//$cat = new Cat('TEDAKI', 'white & black', 3, 'tedaki.png');
//$cat->print();



$cats = array(
    new Cat('TEDAKI', 'white & black', 3, 'tedaki.png'),
    new Cat('AMANDA', 'red', 10),
    new Cat('Siara', 'red', 10),
    new Cat('Ginger', 'red', 4, 'ginger.png'),
    new Cat('Hitler', 'red', 5),
    new Cat('Gucci', 'red', 12),
    new Cat('Betmen', 'red', 5),
    new Cat('Tedy', 'red', 3),
);

/** @var Cat $cat */
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

