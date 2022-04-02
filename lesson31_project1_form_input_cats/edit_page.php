<?php

include_once "function.php";

$catsInfo = cats_info();

if(!isset($_GET['id'])) {
    die("<p style='color:red'>Please provide ID in URL</p>");
}

$catId = $_GET['id'];

if(!isset($catsInfo[$catId])) {
    die("<p style='color:red'>Doesn't exist such ID of cat</p>");
}

$cat = $catsInfo[$catId];

if(!empty($_POST['submit']) && $_POST['submit'] == "UPDATE FORM") {
    $cat['name'] = $_POST['name'];
    $cat['color'] = $_POST['color'];
    $cat['city'] = $_POST['city'];

    if(!empty($_FILES['fileToUpload']['tmp_name'])) {
    $source_file = $_FILES['fileToUpload']['tmp_name'];
    $target_file = "photos_of_cats/" . $cat['name'] . ".png";
    $ismoved = move_uploaded_file($source_file, $target_file);

        if($ismoved) {
            $cat['photo'] = $target_file;

        } else {
            echo "<p style='color: red'>Sorry, there was an error uploading your file. You didn't select file</p>";
        }
    }

    $catsInfo[$catId] = $cat;
    saveArray($catsInfo);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cats edit page</title>
</head>
<body>
<h2 style="color:#ba2222">YOU MAY EDIT YOUR CAT'S INFO BELLOW</h2>
<br /><br />
<form action="" method="post" enctype="multipart/form-data">
    <span style="color:#ba2222; font-weight: bold">NAME:</span><br />
    <input type="text" name="name" value="<?php echo $cat['name'] ?>"><br /><br />
    <span style="color:#ba2222; font-weight: bold">COLOR:</span><br />
    <input type="text" name="color" value="<?php echo $cat['color'] ?>">
    <br /><br />
    <label style="color:#ba2222; font-weight: bold" for="city">SELECT YOUR CAT'S CITY</label>
    <select name="city">
        <option value="Limassol" <?php echo $cat['city'] == 'Limassol' ? 'selected="selected"' : ''; ?>>Limassol</option>
        <option value="Larnaka" <?php echo $cat['city'] == 'Larnaka' ? 'selected="selected"' : ''; ?>>Larnaka</option>
        <option value="Paphos <?php echo $cat['city'] == 'Paphos' ? 'selected="selected"' : ''; ?>">Paphos</option>
    </select>
    <br /><br /><br />
    <?php
    echo !empty($cat['photo']) ? "<img src='{$cat['photo']}?random=" . rand(1,1000) . "' width='200' height='200' />" : '';
    ?>
    <br /><br /><br /><br />
    Edit your photo here:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <br /><br /><br /><br />
    <input type="submit" name="submit" value="UPDATE FORM">
</form>
<br /><br />
<a style="color:blue" href="cats_info.php">Click here to see your cats details</a>
</body>
</html>
