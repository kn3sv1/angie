<?php

include_once "function.php";

$info = getInfo();

if (!isset($_GET['id'])) {
    die('<p style="color:red">please provide id in URL</p>');
}

$personId = $_GET['id'];
//echo '<pre>';
//print_r($info);
if (!isset($info[$personId])) {
    die('<p style="color:red">Doesnt exist such key</p>');
}
$person = $info[$personId];
//print_r($person);

//if (!empty($_POST['operation']) && $_POST['operation'] == 'update') {
//print_r($_POST);
if (!empty($_POST['submit']) && $_POST['submit'] == 'UPDATE') {
    $person['name'] = $_POST['name'];
    $person['surname'] = $_POST['surname'];
    $person['address'] = $_POST['address'];
    $person['city'] = $_POST['city'];
    $person['country'] = $_POST['country'];
    //update information in file
    if (!empty($_FILES["fileToUpload"]["tmp_name"])) {
        $source_file = $_FILES["fileToUpload"]["tmp_name"];
        $target_file = "photos/" .  $person['name']  . '.png';
        $is_moved = move_uploaded_file($source_file, $target_file);
        //if true
        if ($is_moved) {
            $person['photo'] = $target_file;
        } else {
            echo "<p style='color: red'>Sorry, there was an error uploading your file. You didn't select file</p>";
        }
    }




    $info[$personId] = $person;
    saveInfo($info);
}

if (!empty($_POST['submit']) && $_POST['submit'] == 'DELETE') {
    //delete
    //echo '<pre>';
    $person = $info[$personId];
    //echo '<br />DELETING.....<br />';
    //print_r($person);
    unset($info[$personId]);
    //echo '<br />ALL INFO.....<br />';
    //print_r($info);
    //dangerous line . Test before you destroy all array in file. Only if I am sure that it works then I can uncomment line bellow
    saveInfo($info);
    //die('redirect to all people');
    //browser please redirect user to provided address: /angie/lesson30_info_form_19_02_2022/display.php
    //header('Location: /angie/lesson30_info_form_19_02_2022/display.php');
    //header('Location: https://cooljugator.com/gr');
    header('Location: /angie/lesson30_info_form_19_02_2022/display.php');
    //header('roma: 111111111111');
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>info page</title>
</head>
<body style="background-color:#ccffe6">
<h2 style="color:#f77e05" >EDIT YOUR INFO BELLOW</h2>
<form action="" method="post"  enctype="multipart/form-data">
    <?php
//    if (!empty($_GET['id'])) {
        //echo '<input type="hidden" name="operation" value="update">';
//    } else {
//        echo  '<input type="hidden" name="operation" value="add">';
//    }
    ?>
    NAME:<br />
    <input type="text" name="name" value="<?php echo $person['name']; ?>">
    <br /><br />
    SURNAME:<br />
    <input type="text" name="surname" value="<?php echo $person['surname']; ?>">
    <br /><br />
    ADDRESS:<br />
    <textarea name="address" rows="4" cols="50"><?php echo $person['address']; ?></textarea>
    <br />
    <br /><br />
    <p>Please select your area:</p>
    <input type="radio" name="city" id="Limassol" <?php echo  $person['city'] == 'Limassol' ? 'checked' : '';  ?> value="Limassol">
    <label for="Limassol">Limassol</label><br>
    <input type="radio" name="city" id="Paphos" <?php echo  $person['city'] == 'Paphos' ? 'checked' : '';  ?> value="Paphos">
    <label for="Paphos">Paphos</label><br>
    <input type="radio" name="city" id="Bucharest" <?php echo  $person['city'] == 'Bucharest' ? 'checked' : '';  ?> value="Bucharest">
    <label for="Bucharest">Bucharest</label><br>
    <input type="radio" name="city" id="London" <?php echo  $person['city'] == 'London' ? 'checked' : '';  ?> value="London">
    <label for="London">London</label><br>
    <input type="radio" name="city" id="Moscow" <?php echo  $person['city'] == 'Moscow' ? 'checked' : '';  ?> value="Moscow">
    <label for="Moscow">Moscow</label><br>
    <input type="radio" name="city" id="Kiev" <?php echo  $person['city'] == 'Kiev' ? 'checked' : '';  ?> value="Kiev">
    <label for="Kiev">Kiev</label><br>
    <br />
    <label for="country">Please select your country:</label>
    <select name="country">
        <option value="Romania" <?php echo  $person['country'] == 'Romania' ? 'selected="selected"' : '';  ?>>Romania</option>
        <option value="England" <?php echo  $person['country'] == 'England' ? 'selected="selected"' : '';  ?>>England</option>
        <option value="Russia" <?php echo  $person['country'] == 'Russia' ? 'selected="selected"' : '';  ?>>Russia</option>
        <option value="Cyprus" <?php echo  $person['country'] == 'Cyprus' ? 'selected="selected"' : '';  ?>>Cyprus</option>
        <option value="Ukraine" <?php echo  $person['country'] == 'Ukraine' ? 'selected="selected"' : '';  ?>>Ukraine</option>
    </select>
    <br /><br /><br />
    <?php
    //?random=4545 we do this to disable cache of browser to not remember old photos name otherwise he will cache photo(remember)
    echo !empty($person['photo']) ? "<br /><img src='{$person['photo']}?random=" . rand(1,999) . "' width='200' height='200' />" : '';
    ?>
    <br />
    <label for="photo">Please select your photo:</label>
    <input type="file" name="fileToUpload" id="fileToUpload">

    <br /><br /><br /><br />
    <input type="submit" name="submit" value="UPDATE"> &nbsp;&nbsp; <input type="submit" name="submit" value="DELETE">
</form>
<br /><br />
<a style="color:red" href="display.php">View your info here</a>
</body>

</html>

