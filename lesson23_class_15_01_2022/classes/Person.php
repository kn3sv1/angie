<?php

require_once 'Cat.php';
require_once 'Dog.php';

class Person
{
    public $name;
    public $animals;

    public function __construct($name2, $animals)
    {
        $this->name = $name2;
        $this->animals = $animals;
    }

    function printAnimals() {
        echo "<br />I am PERSON $this->name. I have ANIMALS:<br />";
        foreach ($this->animals as $animal) {
              if ($animal instanceof Cat) {
                  echo "<br />I have cat called $animal->name <br />";
              }
              if ($animal instanceof Dog) {
                  echo "<br />I have dog called $animal->name and his age is $animal->age <br />";
              }
        }
    }
}