<?php

require_once 'HTML/TableRow.php';
require_once 'HTML/Table.php';

class StudentTable
{
    private $students = [];

    public function __construct(array $students) {
        $this->students = $students;
    }

    public function print() {
        $rows = [];
        //get keys from array as TABLE COLUMNS
        $keys= array_keys($this->students[0]->toArray());
        $rows[] = new TableRow($keys);

        /** @var Student $student */
        foreach ($this->students as $student) {
            $style = '';
            if ($student->fname == 'fname_2') {
                $style = 'background:#fcbded;';
            } elseif ($student->fname == 'fname_6') {
                $style = 'background:#aac9fa;';
            } elseif ($student->fname == 'fname_8') {
                $style = 'background:#dfaafa;';
            }

            if ($student->age > 25 && $student->age <= 29) {
                $style = 'background:#991ad9;font-weight:bold;font-size:18px';
            }

            //add anyway some default STYLE
            if (empty($style)) {
                $style = 'background:#c7f2e4;';
            }

            //we use TableRow - to generate html table with data and css styles
            $rows[] = new TableRow($student->toArray(), $style);
        }

        $table = new MyTable($rows);
        $table->printTable();
    }
}