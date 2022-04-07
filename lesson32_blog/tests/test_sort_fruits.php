<?php

//Get key - values of second array and put in first array if they have common name

$fruits1 = [
    ['color' => 'white', 'name' => 'banana'],
    ['color' => 'green', 'name' => 'apple'],
    ['color' => 'green', 'name' => 'watermelon'],
    ['color' => 'orange', 'name' => 'orange'],
    ['color' => 'yellow', 'name' => 'lemon'],
];
$fruits2 = [
    ['color' => 'orange', 'name' => 'watermelon', "hobby" => 'football'],
    ['color' => 'green', 'name' => 'orange'],
    ['color' => 'yellow', 'name' => 'lemon3'],
];

//$result = [
//    ['color' => 'white', 'name' => 'banana'],
//    ['color' => 'green', 'name' => 'apple'],
//    //
//    ['color' => 'orange', 'name' => 'watermelon'],
//    ['color' => 'green', 'name' => 'orange'],
//    ['color' => 'yellow', 'name' => 'lemon'],
//];

/*
foreach ($fruits1 as $key => $fruit1) {
    foreach ($fruits2 as $fruit2) {
        if ($fruit1['name'] == $fruit2['name']) {
            $fruit1['color'] = $fruit2['color'];
            //
            $fruits1[$key] = $fruit1;
        }

    }

}
*/
//we go through the one array then go through the second array and if
//they have the same name by key then we go through the second array by key
//and change the value of first array using the second arrays key. If they dont have
//the same name then first array has its own key - values
foreach ($fruits1 as $key => $fruit1) {
    foreach ($fruits2 as $fruit2) {
        if ($fruit1['name'] == $fruit2['name']) {
            foreach ($fruit2 as $f2Key => $f2Value) {
                $fruit1[$f2Key] = $f2Value;
            }
//            $fruit1['color'] = $fruit2['color'];
//            $fruit1['hobby'] = $fruit2['hobby'];
            $fruits1[$key] = $fruit1;
        }

    }

}

echo  '<pre>';
print_r($fruits1);

