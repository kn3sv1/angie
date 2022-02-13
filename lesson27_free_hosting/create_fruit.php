<?php
include 'function.php';

//print_r($fruits);

if (!empty($_POST['name'])) {
    //print_r( $_FILES["fileToUpload"]); die();
    $source_file = $_FILES["fileToUpload"]["tmp_name"];
    $target_file = "photos/" . $_FILES["fileToUpload"]["name"];  //from users computer file name
    //we move from temperary source file to target where we want to store our file.
    move_uploaded_file($source_file, $target_file);

    $fruits[] =  [
        "width" => intval($_POST['width']),
        //"src" => $_POST['src'],
        "src" => $target_file,
        "name" => $_POST['name'],
        "description" => $_POST['description'],
    ];
}

//temperary disable so we dont destroy fruits. Whatever we submit will not be saved.
saveFruits($fruits);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>my fruits</title>
</head>
<body style="background-color:<?php echo getBackgroundColor(); ?>;">
<?php echo getHello(); ?><br />
Add NEW FRUIT:<br />
<form action="" method="post"  enctype="multipart/form-data">
    Width: <input type="text" name="width" value="260"><br><br>
    <!-- Src: <input type="text" name="src" value=""> -->
    <input type="file" name="fileToUpload" id="fileToUpload"><br><br>
    Name: <input type="text" name="name" value=""><br><br>
    Description: <textarea name="description" rows="4" cols="50"></textarea><br>
    <input type="submit" value="ADD FRUIT">
    <br><br>
</form>

<p>

    <a href="index.php">Go back to fruits page</a>

</p>
</body>
</html>