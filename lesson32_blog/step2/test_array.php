<?php


$cats = [
    ['id' => 5, 'name' => 'Tedaki'],
    ['id' => 6, 'name' => 'Ginger'],
    ['id' => 7, 'name' => 'Amanda'],
    ['id' => 8, 'name' => 'Gitler'],
];

$id = 5;

$cat = [];
// add your code here
foreach ($cats as $c) {
    if ($c['id'] == $id) {
        $cat = $c;
    }
}

print_r($cat);