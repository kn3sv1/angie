<?php
//step1: here we should get $person from array
include_once "../function.php";

$colors = getColors();
//print_r($colors);



if (empty($_GET['id'])) {
    die('<span style="color:red">YOU DIDNT PROVIDE ID OF COLOR</span>');
}
if (!array_key_exists($_GET['id'], $colors)) {
    die('<span style="color:red">YOU PROVIDED WRONG ID</span>');
}
//get copy of $color from array
$color = $colors[$_GET['id']];

//print_r($color);

if (!empty($_POST['name'])) {
    echo '<p style="color:green">succesfully submitted</p>';
    //print_r($_POST); die();
    $color['name'] = $_POST['name'];

    //replace original person with modified copy
    $colors[$_GET['id']] = $color;

    saveColors($colors);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>color page</title>
</head>
<body>
<h2>COLOR</h2>
 <form action="" method="post">
    NAME: <input type="text" name="name" value="<?php echo $color["name"]; ?>"><br /><br />
    <input type="submit" value="UPDATE">
</form>
<br />
<a href="index.php">Go to COLORS page</a>
</body>

</html>
