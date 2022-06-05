<?php

require_once 'DrivingLicense.php';

class Person3
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var DrivingLicense
     */
    private $license;

    //here we define the second argument to a type class and assign the object to the property $license
    public function __construct(string $name, DrivingLicense $license)
    {

        $this->name = $name;
        $this->license = $license;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return DrivingLicense
     */
    public function getLicense(): DrivingLicense
    {
        return $this->license;
    }
}


//$person = new Person3("Angie", new DrivingLicense(7777, 'automatic'));

//here we create an object for the class we have in the second argument in construct
$person = new Person3("Angie", new DrivingLicense(7777, 'automatic'));

echo '<pre>';
print_r($person->getName());
echo '<br />Category: ';
print_r($person->getLicense()->getCategory());
echo '<br />License ID: ';
print_r($person->getLicense()->getId());
