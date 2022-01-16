<?php

class Student
{
    public $fname;
    public $lname;
    public $age;
    public $classroom;

    public function printAge() {
        echo $this->age,"<br />";
    }
    function changeAge($newAge) {
        $this->age = $newAge;
    }

    function printInfo() {
        echo $this->age,"<br />";
        echo $this->fname,"<br />";
        echo $this->lname,"<br />";
        echo $this->classroom,"<br />";

    }
}

