<?php

$cats = [
    ['weight' => 56, 'name' => 'Tedaki', 'surname' => 'Neophytou'],
    ['weight' => 6, 'name' => 'Ginger', 'surname' => 'Dem'],
];

//function always takes copy of any variable unless it is object
function copyOriginalArray($dogs) {
    //here we change copy is modified, if you want result do return and accept your result(asign to variabele)
    $dogs[0] = 666;
    //print_r($dogs);
}

//& with such sign argument will not make copy it will accept
// original variable address in memory
function modifyOriginalArray(&$dogs) {
    $dogs[0] = 666;
}

//copyOriginalArray($cats);

modifyOriginalArray($cats);

echo '<pre>';
print_r($cats);