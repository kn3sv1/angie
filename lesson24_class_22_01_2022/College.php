<?php

class College
{
    private $name;
    private $subjects = array();
    private $students = array();

    public function __construct($name, array $subjects)
    {
        $this->name = $name;
        $this->subjects = $subjects;
    }

    public function addStudent(Student $student)
    {
        //add student to associative array
        $this->students[$student->id] = $student;

        //if we write this we duplicate the same student
        //$this->students[] = $student;
    }

    public function removeStudent(Student $student)
    {
        unset($this->students[$student->id]);
    }

    public function getStudents()
    {
        return $this->students;
    }

    public function getCollegeName()
    {
        return $this->name;
    }

    public function printSubjects()
    {
        /** @var Subject $subject */
        foreach ($this->subjects as $subject) {
            $subject->print();
        }
    }

    public function printCollegeName()
    {
        echo "Students of College: ", $this->name,"<br />";
    }

    public function printStudents()
    {
        $this->printCollegeName();
        /** @var Student $student */
        foreach ($this->students as $student) {
            $student->printInfo();
        }
    }

    public function printStudentsOver35()
    {
        $this->printCollegeName();
        /** @var Student $student */
        foreach ($this->students as $student) {
            if ($student->age < 35) {
                continue;
            }
            $student->printInfo();
        }
    }

    public function printOldestOneStudent()
    {
        $this->printCollegeName();

        if (empty($this->students)) {
            echo "No students! <br />";
            return;
        }
        //get first student from associative array
        /** @var Student $oldestStudent */
        $oldestStudent = reset($this->students);

        /** @var Student $student */
        foreach ($this->students as $student) {
            if ($student->age > $oldestStudent->age) {
                $oldestStudent = $student;
            }
        }

        $oldestStudent->printInfo();
    }

    public function printOldestStudents()
    {
        $this->printCollegeName();

        if (empty($this->students)) {
            echo "No students! <br />";
            return;
        }

        $maxAge = 0;
        /** @var Student $student */
        foreach ($this->students as $student) {
            if ($student->age > $maxAge) {
                $maxAge = $student->age;
            }
        }
        //print student whos age equals max age
        foreach ($this->students as $student) {
            if ($student->age == $maxAge) {
                $student->printInfo();
            }
        }
    }

    public function printFemaleStudents()
    {
        $this->printCollegeName();
        /** @var Student $student */
        foreach ($this->students as $student) {
            if ($student->gender !== 'Female') {
                continue;
            }
            $student->printInfo();
        }
    }


    public function printMaleStudents()
    {
        $this->printCollegeName();
        /** @var Student $student */
        foreach ($this->students as $student) {
            if ($student->gender !== 'Male') {
                continue;
            }
            $student->printInfo();
        }
    }

    public function toArray()
    {
        $data = [
            'name'      => $this->name,
            'subjects'  => [],
            'students'  => [],
        ];

        /** @var Subject $subject */
        foreach ($this->subjects as $subject) {
            $data['subjects'][] = $subject->toArray();
        }

        /** @var Student $student */
        foreach ($this->students as $student) {
            $data['students'][] = $student->toArray();
        }

        return $data;
    }
}