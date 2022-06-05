<?php

// https://www.w3resource.com/java-tutorial/inheritance-composition-relationship.php
class Car
{
    /** @var string $color */
    private $color;
    /** @var int $maxSpeed */
    private $maxSpeed;

    public function startCar()
    {
        echo "<p>Car starting</p>";
    }

    public function carInfo()
    {
        echo "Car Color= " . $this->color . " Max Speed= " . $this->maxSpeed;
    }

    public function setColor(string $color)
    {
        $this->color = $color;
    }

    public function setMaxSpeed(int $maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }
}