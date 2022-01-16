<?php

class Dog
{
    public $name;
    public $age;

    public function __construct($name2, $age2)
    {
        $this->name = $name2;
        $this->age = $age2;
    }

    function speak() {
        echo "<br />Meu meu...I am $this->name</br />";
    }

    function eat($food) {
        echo "<br />I am $this->name and I am eating $food</br />";
    }
}