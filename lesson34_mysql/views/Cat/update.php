<?php
/** @var HobbyModel $hobbyModel */
$hobbyModel = $this->hobbyModel;

/** @var CatModel $catModel */
$catModel = $this->catModel;
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
<form action="" method="post" enctype="multipart/form-data">
    NAME:<br />
    <input type="text" name="name" value="<?php echo $cat['name']; ?>">
    <br /><br />
    COLOR:<br />
    <input type="text" name="color" value="<?php echo $cat['color']; ?>">
    <br /><br />
    CITY:<br />
    <input type="text" name="city" value="<?php echo $cat['city']; ?>">
    <br /><br />
    PHOTO:<br />
    Upload your photo here:
    <input type="file" name="photo"><br />
    <?php echo !empty($cat['photo']) ? '<img height="100" src="' . $cat['photo']. '?rand='. rand(1000,2000) . '" />': '';  ?>
    <br />
    HOBBIES<br />
    <select name="hobby">
        <?php foreach ($hobbyModel->getAll() as $hobby) { ?>
            <option <?php echo $cat['hobby'] == $hobby['name'] ? "selected" : ""; ?> value="<?php echo $hobby['name']; ?>"><?php echo $hobby['name']; ?></option>
        <?php } ?>
    </select>
    <br /><br />
    FRIENDS<br />
    <select name="friend">
        <?php foreach ($catModel->getAll() as $cat) { ?>
            <option <?php echo $cat['friend'] == $cat['name'] ? "selected" : ""; ?> value="<?php echo $cat['name']; ?>"><?php echo $cat['name']; ?></option>
        <?php } ?>
    </select>
    <br /><br />
    <input type="submit" name="submit" value="UPDATE">
</form>
<br /><br /><br /><br />
<a href="/angie/lesson34_mysql/index.php?controller=cat&action=index">Go back to main page</a>

