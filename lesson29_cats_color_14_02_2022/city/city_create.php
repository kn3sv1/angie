<?php
//step1: here we should get $cities from array
include_once "../function.php";

$cities = getCities();
//print_r($cities);


if (!empty($_POST['city'])) {
    echo '<p style="color:green">succesfully submitted</p>';
    //print_r($_POST); die();
    $city = [];
    $city['city'] = $_POST['city'];
    $city['year'] = $_POST['year'];
    $city['population'] = $_POST['population'];

    //replace original person with modified copy
    $id = getNextId($cities);
    $cities[$id] = $city;

    saveCities($cities);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>City page</title>
</head>
<body>
<h2>CITIES</h2>
 <form action="" method="post">
    CITY: <input type="text" name="city" value=""><br />
     YEAR: <input type="text" name="year" value=""><br />
     POPULATION: <input type="text" name="population" value=""><br />
    <input type="submit" value="CREATE">
</form>
<br />
<a href="index.php">Go to CITIES page</a>
</body>

</html>
