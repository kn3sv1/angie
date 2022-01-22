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

$row0 = new TableRow(
    [
        'name' => 'NAME',
        'age' => 'AGE',
        'city' => 'City',
    ],
    'background:#adffef;'
);
$row1 = new TableRow(
    [
        'name' => 'Angela',
        'age' => 20,
        'city' => 'Limassol',
    ],
    'background:#fcbded;'
);
$row2 = new TableRow(
    [
        'name' => 'George',
        'age' => 25,
        'city' => 'Limassol',
    ],
    'background:#e8fcbd;'
);

$table = new Table([$row0, $row1, $row2]);
$table->printTable();
?>
</body>
</html>
