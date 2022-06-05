<?php

abstract class College
{
    /**
     * @return string
     */
    abstract public function getName();
    /**
     * @return Student[]
     */
    abstract public function geStudents();

    public function printInfo() {
        echo "<br /><h1 style='color: #0033cc;padding-bottom: 20px'>College is " . $this->getName() . '</h1>';
        //group by $diploma AND PRINT IT
        $data = $this->getGroupedByDiploma();
        //echo '<pre>';
        //print_r($data);

        //my normaly printed text

        /**
         * @var $diploma string
         * @var $students Student[]
         */
        foreach ($data as $diploma => $students) {
            echo "<br /><p style='font-weight: bold;font-size: 20px;color:red'>Students according to diploma: {$diploma}</p><br />";
            foreach ($students as $student) {
                echo "<p>{$student->getName()}</p>";

            }
        }
    }

    /**
     * this function gets students by diploma title and groups them
     * @return array
     */
    private function getGroupedByDiploma()
    {
        $data = [];
        //create associative array with key diploma
        foreach ($this->geStudents() as $student) {
            $diploma = $student->getDiploma();
            //create key by diploma if it doesnt exist
            if (!isset($data[$diploma])) {
                $data[$diploma] = [];
            }
            //we push inside diploma key array
            $data[$diploma][] = $student;
        }
        return $data;
    }

}

