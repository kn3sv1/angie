<?php


echo "Hello UPDATE FORM<br />";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>info page</title>
</head>
<body style="background-color:#ccffe6">
<h2 style="color:#f77e05" >EDIT YOUR INFO BELLOW</h2>
<?php if (!empty($messageInfo)) {
    echo '<p style="color:green">' . $messageInfo . '</p>';
} ?>
<form action="" method="post">
    NAME:<br />
    <input type="text" name="name" value="<?php echo $hobby['name']; ?>">
    <br /><br /><br /><br />
    <input type="submit" name="submit" value="UPDATE">
</form>

