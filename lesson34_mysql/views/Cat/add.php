<?php
    /** @var HobbyModel $hobbyModel */
    $hobbyModel = $this->hobbyModel;

//we access private property in class CatController
    /** @var CatModel $catModel */
    $catModel = $this->catModel;
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
<form action="" method="post" enctype="multipart/form-data">
    NAME:<br />
    <input type="text" name="name" value=""><br /><br />
    COLOR:<br />
    <input type="text" name="color" value=""><br /><br />
    CITY:<br />
    <input type="text" name="city" value=""><br /><br />

    Upload your photo here:
    <input type="file" name="photo">
    <br /><br />
    HOBBIES<br />
    <select name="hobby">
        <?php foreach ($hobbyModel->getAll() as $hobby) { ?>
        <option value="<?php echo $hobby['name']; ?>"><?php echo $hobby['name']; ?></option>
        <?php } ?>
    </select><br /><br />
    FRIENDS<br />
    <select name="friend">
        <?php foreach ($catModel->getAll() as $cat) { ?>
            <option value="<?php echo $cat['name']; ?>"><?php echo $cat['name']; ?></option>
        <?php } ?>
    </select>
    <br /><br />
    <input type="submit" value="SUBMIT FORM">
</form>
<br /><br /><br /><br />
<a href="/angie/lesson34_mysql/index.php?controller=cat&action=index">Go back to main page</a>