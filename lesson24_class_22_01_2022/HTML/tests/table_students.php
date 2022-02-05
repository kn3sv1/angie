<!DOCTYPE html>
<html>
<style>
    table, th, td {
        border:1px solid black;
    }
    table {
        width: 100%;
    }
    tr {
        padding:5px;
    }
</style>
<body>
<?php

require_once '../Table.php';
require_once '../TableRow.php';
require_once '../../Student.php';
require_once '../../StudentTable.php';

$students = [];
for ($i = 0; $i < 20; $i++) {
    $student = new Student();
    $student->id = $i;
    $student->gender = $i%2 == 0 ? 'Male' : 'Female';
    $student->age = $i + rand(20, 40);
    $student->fname = 'fname_' . $i;
    $student->lname = 'lname_' . $i;
    $student->classroom = $i . 'C';
    $student->photo = 'Angie.png';

    $students[] = $student;
}

$studentTable = new StudentTable($students);
$studentTable->print();



?>
</body>
</html>
