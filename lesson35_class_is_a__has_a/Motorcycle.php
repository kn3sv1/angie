<?php
require_once 'Car.php';
require_once 'Engine.php';

//extends - means "IS A"
class Motorcycle
{
    public function start()
    {
        echo "<p>Start Motorcycle</p>";
        //Motorcycle "HAS A" engine
        $engine = new Engine();
        $engine->start();
    }
}
