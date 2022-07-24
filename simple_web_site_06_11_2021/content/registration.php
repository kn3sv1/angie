<?php

//We never directly call file from browser. Only from index where they are all included and joined through functions
//include_once "includes/functions.php";

$sign_in = getInfo();

$errors = array();

if (!empty($_POST)) {

    $errors = validation($errors, 'name');
    $errors = validation($errors, 'surname');
    $errors = validation($errors, 'password');

}

if (!empty($_POST['name']) && empty($errors)) {
    echo '<p style="color:green">succesfully submitted</p>';
    $newArray = [];
    $newArray['name'] = $_POST['name'];
    $newArray['surname'] = $_POST['surname'];
    $newArray['password'] = $_POST['password'];

//    $source_file = $_FILES['fileToUpload']['tmp_name'];
//    $target_file = "photos_of_cats/" . $newArray['name'] . ".png";
//    move_uploaded_file($source_file, $target_file);
//    $newArray['photo'] = $target_file;


    $sign_in[] = $newArray;
    saveInfo($sign_in);
}




?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registration page</title>
</head>
<body>
<h2 style="color:#000099">To sign in enter your information bellow</h2>
<br /><br />
<form action="" method="post" enctype="multipart/form-data">
    <span style="color:#3333ff; font-weight: bold">NAME:</span><br />
    <input type="text" name="name" value="">
    <?php printErrors($errors, 'name'); ?>
    <br /><br />
    <span style="color:#3333ff; font-weight: bold">SURNAME:</span><br />
    <input type="text" name="surname" value="">
    <?php printErrors($errors, 'surname'); ?>
    <br /><br />
    <span style="color:#3333ff; font-weight: bold">PASSWORD:</span><br />
    <input type="text" name="password" value="">
    <?php printErrors($errors, 'password'); ?>
    <br /><br />
<br /><br /><br /><br />
<!--    Upload your photo here:-->
<!--    <input type="file" name="fileToUpload">-->
<!--<br /><br /><br /><br />-->
    <input type="submit" value="SUBMIT FORM">
</form>
<br /><br />
<a style="color:blue" href="info.php">Click here to see your details</a>
</body>
</html>