<?php

//foreach
$data = [
    ["name" => "Angie", "surname" => "Neophytou", "age" => "38"],
    ["name" => "George", "surname" => "Neophytou", "age" => "36"],
    ["name" => "Savvas", "surname" => "Neophytou", "age" => "63"],
    ["name" => "Roman", "surname" => "Satanovsky", "age" => "37"],
    ["name" => "Tamila", "surname" => "Satanovsky", "age" => "60"],
    ["name" => "Sveta", "surname" => "Satanovsky", "age" => "38"],
];

$group_array = [];
foreach ($data as $value) {
    $group_array[$value['surname']][] = $value;
}

echo "Array grouped according to family name : <br />";
echo "<pre>";
print_r($group_array);

echo "<br /><br />";

//foreach inside function
function groupArray($property, $array_data) {
    $group_array = [];
        foreach ($array_data as $value) {
            $group_array[$value[$property]] [] = $value;
        }
    return $group_array;
}

echo "Array grouped according to family name via function : <br />";
echo "<pre>";
print_r(groupArray("surname", $data));
