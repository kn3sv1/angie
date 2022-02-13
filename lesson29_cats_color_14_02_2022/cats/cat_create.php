<?php
//step1: here we should get $person from array
include_once "../function.php";

$cats = getCats();
//print_r($cats);
$colors = getColors();


if (!empty($_POST['name'])) {
    echo '<p style="color:green">succesfully submitted</p>';
    //print_r($_POST); die();
    $cat = [];
    $cat['name'] = $_POST['name'];
    $cat['color_id'] = $_POST['color_id'];

    //replace original person with modified copy
    $id = getNextId($cats);
    $cats[$id] = $cat;

    saveCats($cats);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>cat page</title>
</head>
<body>
<h2>CAT</h2>
 <form action="" method="post">
    NAME: <input type="text" name="name" value="">
     <br />COLOR:
     <select name="color_id">
         <?php
         foreach ($colors as $id => $color) {
             $selected = '';
             echo '<option style="font-weight:bold;color:' . $color['name'] . '" ' . $selected . '  value="' . $id . '" >' .$color['name'] . '</option>';
         }
         ?>
     </select><br /><br />
    <input type="submit" value="CREATE">
</form>
<br />
<a href="index.php">Go to CATS page</a>
</body>

</html>
