<?php


//this function doesnt belong to one cat. This function works with many cats
//we create array of objects grouped by age
//we can put this function in class that works with arrray of cats.
//For example "CatCollection" or "CatArray' class
function groupCatsByAge(array $cats)
{
    $result = array();

    //we use this to show autocomplete in every line
    /** @var CatModel $cat */
    foreach ($cats as $cat) {
        //if (!array_key_exists($cat->age, $result)) {
        $age = $cat->age;
        if (!isset($result[$age])) {
            $result[$age] = [];
        }
        //in ths line we are 100% sure that we have key in array
        $result[$cat->age][] = $cat;
    }

    return $result;
}
//this function doesnt belong to one cat. This function works with many cats
function getCatsByAgeEqual(array $cats, $age)
{
    $result = array();
    /** @var CatModel $cat */
    foreach ($cats as $cat) {
        if ($cat->age == $age) {
            $result[] = $cat;
        }
    }
    return $result;
}

