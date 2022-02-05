<?php


class Doctor
{
    private $id;
    private $name;
    private $specialization;
    private $photo;

    public function __construct($id, $name, $specialization, $photo)
    {
        $this->id = $id;
        $this->name = $name;
        $this->specialization = $specialization;
        $this->photo = $photo;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSpecialization()
    {
        return $this->specialization;
    }

    public function getPhoto()
    {
        return $this->photo;
    }

    function print() {
        echo $this->name,"<br />";
        echo $this->specialization,"<br />";
        echo "<img width='200' height='200' src='photos/{$this->photo}' /><br/>";
    }
}