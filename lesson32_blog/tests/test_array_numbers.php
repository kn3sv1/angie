<?php


$numbers = [
    [1,2,88888],
    [5,84,9,88],
    [5,8,9,88],
    [5,18,9,88],
    [2,2,3,30],
];

//1) sum in each ROW and after sort array (NEW ARRAY) by ASC order
//2) sum all numbers in array that are bigger than 10
$result = [];
foreach ($numbers as $key => $value) {
        $sum = 0;
        foreach ($value as $number) {
            if ($number < 10) {
                continue;
            }
            $sum = $sum + $number;
        }
        $result[$key] = $sum;
        //$result[$key] = array_sum($numbers[$key]);
        echo "<br />";
        print_r($result);
    }


//Sort an array from smallest to biggest (ascending order) and maintain index association
asort($result);

//go through array of result and push inside finalArray result using key of
//numbers array
$finalArray = [];
foreach ($result as $key => $item) {
    $finalArray[] = $numbers[$key];
}


echo  '<pre>';
//print_r($numbers);
print_r($result);

//print_r($finalArray);

