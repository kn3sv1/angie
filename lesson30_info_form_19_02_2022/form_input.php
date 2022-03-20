<?php

include_once "function.php";

$info = getInfo();

$errors = array();
//$comment_id = array_key_exists('comment_id', $_GET) ? $_GET['comment_id'] : '';
//please print me all details about variable and what is inside
///var_dump($comment_id);
//print_r($info);

//$person = $info[$comment_id];

if (!empty($_POST)) {

    $errors = validation($errors, 'name');
    $errors = validation($errors, 'surname');
    $errors = validation($errors, 'address');

    //print_r($errors);
}

if (!empty($_POST['name']) && empty($errors)) {
    echo '<p style="color:green">succesfully submitted</p>';
    //print_r($_POST); die();
    $text = [];//same like $text = array();
    $text['name'] = $_POST['name'];
    $text['surname'] = $_POST['surname'];
    $text['address'] = $_POST['address'];
    $text['city'] = $_POST['city'];
    $text['country'] = $_POST['country'];

    //It is optional for user to upload photo
    //print_r($_FILES); die();
    if (!empty($_FILES["fileToUpload"]["tmp_name"])) {
        $source_file = $_FILES["fileToUpload"]["tmp_name"];
        //$target_file = "photos/" .  $text['name']  . '664444444444444444444444444444444444444444444444411111111111111111111111111111111111111111111111111111112222222222222222222222222222222222222222222222222222222222222222222222222222222333333333333333333333333333333333333333333333333333664444444444444444444444444444444444444444444444411111111111111111111111111111111111111111111111111111112222222222222222222222222222222222222222222222222222222222222222222222222222222333333333333333333333333333333333333333333333333333.png';
        //in windows name of file that user submits shouldn't be longer than 255 characters that's why we check if function move_uploaded file() is true.
        $target_file = "photos/" .  $text['name']  . '.png';
        //function moves and retuns result if it moves
        $is_moved = move_uploaded_file($source_file, $target_file);
        //if true
        if ($is_moved) {
            $text['photo'] = $target_file;
            //echo "The file <span style='color:green;font-weight:bold'>". $target_file. "</span> has been uploaded. <img src='{$target_file}' />";
        } else {
            echo "<p style='color: red'>Sorry, there was an error uploading your file. You didn't select file</p>";
        }
    }
    //It is optional for user to upload additional photo
    //Additional photo
    if (!empty($_FILES["fileToUpload_additional"]["tmp_name"])) {
        $source_file = $_FILES["fileToUpload_additional"]["tmp_name"];
        $target_file = "photos/" .  $text['name']  . '_additional.png';
        //we dont check if everything ok. We believe everything ok. We write simple code to learn
        move_uploaded_file($source_file, $target_file);
        $text['photo_additional'] = $target_file;
    }


    $info[] = $text;
    saveInfo($info);

}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>info page</title>
</head>
<body style="background-color:powderblue;">
<h2 style="color:#f77e05" >ENTER YOUR INFO BELLOW</h2>
<form action="" method="post"  enctype="multipart/form-data">
    NAME:<br />
    <input type="text" name="name" value="">
    <?php printError($errors, 'name'); ?><br /><br />
    SURNAME:<br />
    <input type="text" name="surname" value="">
    <?php printError($errors, 'surname'); ?><br /><br />
    ADDRESS:<br />
    <textarea name="address" rows="4" cols="50"></textarea>
    <?php printError($errors, 'address'); ?><br />
<br /><br />
    <p style="color:#f77e05; font-size:20px;">Please select your area:</p>
    <input type="radio" name="city" id="Limassol" value="Limassol">
    <label for="Limassol">Limassol</label><br>
    <input type="radio" name="city" id="Paphos" checked value="Paphos">
    <label for="Paphos">Paphos</label><br>
    <input type="radio" name="city" id="Bucharest" value="Bucharest">
    <label for="Bucharest">Bucharest</label><br>
    <input type="radio" name="city" id="London" value="London">
    <label for="London">London</label><br>
    <input type="radio" name="city" id="Moscow" value="Moscow">
    <label for="Moscow">Moscow</label><br>
    <input type="radio" name="city" id="Kiev" value="Kiev">
    <label for="Kiev">Kiev</label>
<br /><br />
    <label for="country"; style="color:#f77e05; font-size:20px;">Please select your country:</label>
    <select name="country">
        <option value="Romania">Romania</option>
        <option value="England">England</option>
        <option value="Russia">Russia</option>
        <option value="Cyprus" selected="selected">Cyprus</option>
        <option value="Ukraine">Ukraine</option>
    </select>
<br /><br /><br /><br />
    Upload your photo here:
    <input type="file" name="fileToUpload">
    <br /><br />
    Upload ADDITIONAL your photo here:
    <input type="file" name="fileToUpload_additional">
<br /><br /><br /><br />
    <input type="submit" value="SUBMIT FORM">
</form>
<br /><br />
<a style="color:red" href="display.php">View your info here</a>
</body>

</html>
