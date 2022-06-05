<?php
require_once 'Car.php';
require_once 'Engine.php';

//extends - means "IS A"
class Toyota extends Car
{
    //Toyota extends Car and thus inherits all methods from Car (except final and static)
    //Toyota can also define all its specific functionality
    public function start()
    {
        $this->startCar();
        // when you start toyota with key it will start engine inside and another 1 million objects

        //toyota "HAS A" engine
        $engine = new Engine();
        $engine->start();

        //abs starting, car computer starting dash board panel starting = different objects starting
    }
}