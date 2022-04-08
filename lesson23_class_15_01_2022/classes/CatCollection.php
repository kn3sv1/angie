<?php

class CatCollection
{
    public $cats;

    public function __construct(array $cats)
    {
        $this->cats = $cats;
    }

    function groupCatsByAge()
    {
        $result = array();

        //we use this to show autocomplete in every line
        /** @var CatModel $cat */
        foreach ($this->cats as $cat) {
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

    function getCatsByAgeEqual($age)
    {
        $result = array();
        /** @var CatModel $cat */
        foreach ($this->cats as $cat) {
            if ($cat->age == $age) {
                $result[] = $cat;
            }
        }
        return $result;
    }
}