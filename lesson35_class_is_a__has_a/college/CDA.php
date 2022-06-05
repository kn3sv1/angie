<?php

require_once 'College.php';
require_once 'Student.php';

//Class CDA is a college and has students

class CDA extends College
{
    /**
     * @var Student[]
     */
    private $students;

    public function __construct(array $students)
    {
        $this->students = $students;
    }

    public function getName()
    {
        return 'CDA corporation Limassol';
    }

    public function geStudents()
    {
        return $this->students;
//        return [
//            new Student('Angie Neophytou', 'Secretary'),
//            new Student('Roma Satanovsky', 'computer science'),
//            new Student('Katerina Neophytou', 'Secretary'),
//            new Student('George Neophytou', 'Forex'),
//        ];
    }
}