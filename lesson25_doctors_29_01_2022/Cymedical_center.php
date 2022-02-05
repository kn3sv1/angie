<!DOCTYPE html>
<html>
<style>
    table, th, td {
        border:1px solid black;
        border-collapse: collapse;
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

require_once 'Clinic.php';
require_once 'Doctor.php';

$doctors = include 'doctor_list.php';

$clinic = new Clinic('Cymedical center', $doctors);
//$clinic->printNormal();
$clinic->printTable();

//
///** @var Doctor $doctor1 */
//$doctor1 = $doctors[1];
//
//
//echo  $doctor1->getName();

?>
</body>
</html>
