<?php

//student is type of variable. Every object has own variables inside
class Student
{
    public $id;
    public $fname;
    public $lname;
    public $age;
    public $classroom;
    public $gender;
    public $photo;

    public function printAge() {
        echo $this->age,"<br />";
    }
    function changeAge($newAge) {
        $this->age = $newAge;
    }

    function printInfo() {
        echo "Id: ", $this->id,"<br />";
        echo "Gender: ", $this->gender,"<br />";
        echo "Age: ", $this->age,"<br />";
        echo "First name: ", $this->fname,"<br />";
        echo "Last name: ", $this->lname,"<br />";
        echo "Classroom: ", $this->classroom,"<br />";
        echo "Photo: ", "<img src='photos/{$this->photo}' /><br/>";
    }

    public function toArray()
    {
        return [
            'id'        => $this->id,
            'gender'    => $this->gender,
            'age'       => $this->age,
            'fname'     => $this->fname,
            'lname'     => $this->lname,
            'classroom' => $this->classroom,
            'photo'     => "<img src='../../photos/{$this->photo}' />",
        ];
    }
}