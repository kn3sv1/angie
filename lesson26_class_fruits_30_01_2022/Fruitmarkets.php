<?php


class Fruitmarket
{
    private $name;
    private $location;
    private $postcode;
    private $telephone;

    public function __construct($name, $location, $postcode, $telephone)
    {
        $this->name = $name;
        $this->location = $location;
        $this->postcode = $postcode;
        $this->telephone = $telephone;
    }

    public function print()
    {
        echo "<h2 style='color:red;'>{$this->name}</h2>";
        echo $this->location;
        echo $this->postcode;
        echo $this->telephone;
    }
}