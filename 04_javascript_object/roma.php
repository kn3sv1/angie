<?php

////data no function inside
//$person = [
//  "name" => "Roma",
//  "birthYear" => 1985,
//];
//
//
////calculate how old is Person
//
//function calculateAge($currentYear, $personBirthYear) {
//    return $currentYear - $personBirthYear;
//}
//
////with function
//echo calculateAge(2022, $person['birthYear']), "<br />";
//
////without function
//
//echo 2022 - $person['birthYear'], "<br />";


class Car {
    //DATA
    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return "Model. " . $this->name;
    }
}

///OOP - we mix together DATA & FUNCTIONS in SOME CLASS
class Person {
    //DATA
    private $name;
    private $birthYear;

    public function __construct($name, $birthYear)
    {
        $this->name = $name;
        $this->birthYear = $birthYear;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return "Mr/s." .$this->name;
    }

    /**
     * @return mixed
     */
    public function getBirthYear()
    {
        return $this->birthYear;
    }

    //FUNCTION
    public function getAge($currentYear)
    {
        return $currentYear - $this->birthYear;
    }
}

class PersonSurname {
    private $people;

    public function __construct($people)
    {
        $this->people = $people;
    }

    public function getAllPersons($surname)
    {
        $arr = [];
        /** @var Person $person */
        foreach ($this->people as $person) {
            ///bla bla bla
            // if string positon in NAME not equal FALSE (MEANS ABSENT)
            // strpos("Roma Satanovskyi", "Neophytou") !== false
            if (strpos($person->getName(), $surname) !== false) {
                $arr[] = $person;
            }
        }

        //array of people with surname: $surname
        return $arr;
    }
}


$roma = new Person("Roma Satanovskyi", 1985);
$sveta = new Person("Sveta Satanovskyi", 1983);
$angie = new Person("Angie Neophytou", 1984);
$george = new Person("George Neophytou", 1986);

$people = [$roma, $sveta, $angie, $george];
$surnames = new PersonSurname($people);

//I will all relatives
$neophytous = $surnames->getAllPersons("Neophytou");
echo "<br /><br /><pre />";
print_r($neophytous);
echo "<br /><br />";


echo $roma->getAge(2022), "<br />";
echo $angie->getAge(2022), "<br />";
echo $angie->getName(), "<br />";


$angieCar = new Car("Toyota");
echo $angieCar->getName(), "<br />";


//CODE IS BAD!!!!!!!!!!!!!!!
function printName($name, $type) {
    //$name -is car name or Person
    if ($type === 'Car') {
        echo "Model. " .  $name, "<br />";
    }
    else if ($type === 'Person') {
        echo "Mr/s. " .  $name, "<br />";
    }
}

//HERE NAME WE WORK WITH CARS
$name = 'Toyota';
echo $name, "<br />";


//OTHER PROGRAMMER NOW SHOULD THINK THAT HE WORKS WITH PEOPLE
$name = 'Roman';
echo $name, "<br />";



// https://www.w3schools.com/php/func_string_strpos.asp

var_dump(strpos("Satanovskyi", "Neophytou"));

var_dump(strpos("RNeophytou Satanovskyi", "Neophytou"));
var_dump(strpos("Neophytou Satanovskyi", "Neophytou"));
var_dump(strpos("Neoph", "Neophytou"));

$compare = strpos("Neoph", "Neophytou");
var_dump($compare);