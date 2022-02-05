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

$clinic = new Clinic('Cymedical center', $doctors);

$specialization = $_GET['specialization'];

$clinic->printSpecialization($specialization);

//print_r($specialization);
?>
</body>
</html>
