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

require_once 'Clinic.php';
require_once 'Doctor.php';

$doctors = include 'doctor_list.php';

$id = $_GET['id'];

/** @var Doctor $doctor */
$doctor = $doctors[$id];
$doctor->print();

?>
</body>
</html>
