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
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<div>
    <h2 class="label">PLEASE ENTER YOUR CAT'S INFO BELLOW</h2>
    <br /><br />
    <form action="" method="post" enctype="multipart/form-data">
        <span class="label">NAME:</span>
        <br /><br />
        <input type="text" name="name" value="">
        <?php printErrors($userErrors, 'name'); ?>
        <br /><br />
        <span class="label">COLOR:</span>
        <br /><br />
        <input type="text" name="color" value="">
        <?php printErrors($userErrors, 'color'); ?>
        <br /><br /><br />
        <label class="label" for="city">SELECT YOUR CAT'S CITY</label>
        <br /><br />
        <select name="city">
            <option value="Limassol">Limassol</option>
            <option value="Larnaka">Larnaka</option>
            <option value="Paphos">Paphos</option>
        </select>
    <br /><br /><br /><br />
        Upload your photo here:
        <input type="file" name="fileToUpload">
    <br /><br /><br /><br />
        <button type="submit">SUBMIT FORM</button>
    </form>
    <br /><br />
    <a style="color:blue" href="cats_info.php">Click here to see your cats details</a>
</div>
</body>
</html>

