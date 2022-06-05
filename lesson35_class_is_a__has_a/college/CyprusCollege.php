<?php

require_once 'College.php';
require_once 'Student.php';

class CyprusCollege extends College
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
        return 'Cyprus College of Limassol';
    }

    public function geStudents()
    {
        return $this->students;
    }
}