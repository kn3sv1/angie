<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>info page</title>
</head>
<body style="background-color:powderblue;">
<h2 style="color:#f77e05" >ENTER YOUR INFO BELLOW</h2>
<?php if (!empty($messageInfo)) {
    echo '<p style="color:green">' . $messageInfo . '</p>';
} ?>
<form action="" method="post">
    NAME:<br />
    <input type="text" name="name" value=""><br /><br />
<br /><br />
    <input type="submit" value="SUBMIT FORM">
</form>