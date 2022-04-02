<?php

include_once "function.php";

$catsInfo = cats_info();

$userErrors = array();

if (!empty($_POST)) {

    $userErrors = validateErrors($userErrors, 'name');
    $userErrors = validateErrors($userErrors, 'color');

}

if (!empty($_POST['name']) && empty($userErrors)) {
    echo '<p style="color:green">succesfully submitted</p>';
    $newArray = [];
    $newArray['name'] = $_POST['name'];
    $newArray['color'] = $_POST['color'];
    $newArray['city'] = $_POST['city'];

    $source_file = $_FILES['fileToUpload']['tmp_name'];
    $target_file = "photos_of_cats/" . $newArray['name'] . ".png";
    move_uploaded_file($source_file, $target_file);
    $newArray['photo'] = $target_file;


    $catsInfo[] = $newArray;
    saveArray($catsInfo);
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cats info page</title>
</head>
<body>
<h2 style="color:#ba2222">PLEASE ENTER YOUR CAT'S INFO BELLOW</h2>
<br /><br />
<form action="" method="post" enctype="multipart/form-data">
    <span style="color:#ba2222; font-weight: bold">NAME:</span><br />
    <input type="text" name="name" value="">
    <?php printErrors($userErrors, 'name'); ?>
    <br /><br />
    <span style="color:#ba2222; font-weight: bold">COLOR:</span><br />
    <input type="text" name="color" value="">
    <?php printErrors($userErrors, 'color'); ?>
    <br /><br />
    <label style="color:#ba2222; font-weight: bold" for="city">SELECT YOUR CAT'S CITY</label>
    <select name="city">
        <option value="Limassol">Limassol</option>
        <option value="Larnaka">Larnaka</option>
        <option value="Paphos">Paphos</option>
    </select>
<br /><br /><br /><br />
    Upload your photo here:
    <input type="file" name="fileToUpload">
<br /><br /><br /><br />
    <input type="submit" value="SUBMIT FORM">
</form>
<br /><br />
<a style="color:blue" href="cats_info.php">Click here to see your cats details</a>
</body>
</html>

