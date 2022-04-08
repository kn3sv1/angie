<?php
    /** @var HobbyModel $hobbyModel */
    $hobbyModel = $this->hobbyModel;
?>
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
    COLOR:<br />
    <input type="text" name="color" value=""><br /><br />
    CITY:<br />
    <input type="text" name="city" value=""><br /><br />
    PHOTO:<br />
    <input type="text" name="photo" value=""><br /><br />
    HOBBIES<br />
    <select name="hobby">
        <?php foreach ($hobbyModel->getAll() as $hobby) { ?>
        <option value="<?php echo $hobby['id']; ?>"><?php echo $hobby['name']; ?></option>
        <?php } ?>
    </select>
    <br /><br />
    <input type="submit" value="SUBMIT FORM">
</form>