<?php

require_once 'Toyota.php';
require_once 'Motorcycle.php';

class RelationsDemo
{
    public function main()
    {
        $toyota = new Toyota();
        $toyota->setColor("RED");
        $toyota->setMaxSpeed(180);
        $toyota->carInfo();
        $toyota->start();

        $motorcycle = new Motorcycle();
        $motorcycle->start();
    }
}

//outside of class we create object and call function of that class
$demo = new RelationsDemo();
$demo->main();

