<?php
echo '<pre>';

//we cannot have just associative array with the same key because that key will overwrite all keys in
//the last element in array so if we print_r it will show just "type" => "cherry", "color" => "dark red"

//numerical array
//This result is to see how array should look because for different result will be different code
$result = [
    [
        "type" => "banana",
        "color" => "yellow",
        "weight" => "1kg",
    ],
    [
        "type" => "strawberry",
        "color" => "yellow",
        "weight" => "500g",
    ],
];
print_r($result);

//associative array
$result = [
    "banana" => [
        "color" => "yellow",
        "weight" => "1kg",
    ],
    "strawberry" => [
        "color" => "yellow",
        "weight" => "500g",
    ],
];
print_r($result);

//associative array and can be as numerical
$result = [
    "banana" => [
        "type" => "banana",
        "color" => "yellow",
        "weight" => "1kg",
    ],
    "strawberry" => [
        "type" => "strawberry",
        "color" => "yellow",
        "weight" => "500g",
    ],
];
print_r($result);

$fruitColor = [
    ["type" => "banana", "color" => "yellow"],
    ["type" =>"strawberry", "color" => "red"],
    ["type" => "grape", "color" => "green"],
    ["type" => "cherry", "color" => "dark red"]
];

$fruitWeight = [
    ["type" => "strawberry", "weight" => "500g"],
    ["type" => "banana", "weight" => "1kg"],
    ["type" => "grape", "weight" => "400g"],
    ["type" => "cherry", "weight" => "300g"]
];
//print_r($fruitWeight);
$colorWeight = [];

for($i = 0; $i < count($fruitColor); $i++) {
    for($a = 0; $a < count($fruitWeight); $a ++) {
        if ($fruitColor[$i]['type'] == $fruitWeight[$a]['type']) {
            $type = $fruitWeight[$a]['type'];
            $colorWeight[] = [
                "type" => $type,
                "color" => $fruitColor[$i]['color'],
                "weight" => $fruitWeight[$a]['weight'],
            ];
        }
    }
}
//numerical result
print_r($colorWeight);

$colorWeight = [];
for($i = 0; $i < count($fruitColor); $i++) {
    for($a = 0; $a < count($fruitWeight); $a ++) {
        if ($fruitColor[$i]['type'] == $fruitWeight[$a]['type']) {
            $type = $fruitWeight[$a]['type'];
            $colorWeight[$type] = [
                "color" => $fruitColor[$i]['color'],
                "weight" => $fruitWeight[$a]['weight'],
            ];
        }
    }
}
//associative result
print_r($colorWeight);


$colorWeight = [];
for($i = 0; $i < count($fruitColor); $i++) {
    for($a = 0; $a < count($fruitWeight); $a ++) {
        if ($fruitColor[$i]['type'] == $fruitWeight[$a]['type']) {
            $type = $fruitWeight[$a]['type'];
            $colorWeight[$type] = [
                "type" => $type,
                "color" => $fruitColor[$i]['color'],
                "weight" => $fruitWeight[$a]['weight'],
            ];
        }
    }
}
//associative inside numerical
print_r($colorWeight);

//we are making just numerical
print_r(array_values($colorWeight));


