<?php
//step1: here we should get $person from array
include_once "../function.php";

$cities = getCities();
//print_r($cities);



if (empty($_GET['id'])) {
    die('<span style="color:red">YOU DIDNT PROVIDE ID OF COLOR</span>');
}
if (!array_key_exists($_GET['id'], $cities)) {
    die('<span style="color:red">YOU PROVIDED WRONG ID</span>');
}
//get copy of $color from array
$city = $cities[$_GET['id']];

//print_r($color);

if (!empty($_POST['name'])) {
    echo '<p style="color:green">succesfully submitted</p>';
    //print_r($_POST); die();
    $city['city'] = $_POST['city'];

    //replace original person with modified copy
    $cities[$_GET['id']] = $city;

    saveCities($cities);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>city page</title>
</head>
<body>
<h2>CITY</h2>
 <form action="" method="post">
    NAME: <input type="text" name="city" value="<?php echo $city["city"]; ?>"><br /><br />
    <input type="submit" value="UPDATE">
</form>
<br />
<a href="index.php">Go to CITIES page</a>
</body>

</html>
