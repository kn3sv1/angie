<?php
//step1: here we should get $colors from array
include_once "../function.php";

$colors = getColors();
//print_r($colors);


if (!empty($_POST['name'])) {
    echo '<p style="color:green">succesfully submitted</p>';
    //print_r($_POST); die();
    $color = [];
    $color['name'] = $_POST['name'];

    //replace original person with modified copy
    $id = getNextId($colors);
    $colors[$id] = $color;

    saveColors($colors);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Color page</title>
</head>
<body>
<h2>COLOR</h2>
 <form action="" method="post">
    NAME: <input type="text" name="name" value=""><br />
    <input type="submit" value="CREATE">
</form>
<br />
<a href="index.php">Go to COLORS page</a>
</body>

</html>
