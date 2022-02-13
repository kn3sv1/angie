<?php
//step1: here we should get $person from array
include_once "function.php";

$people = getPeople();
//print_r($people);


if (!empty($_POST['name'])) {
    echo '<p style="color:green">succesfully submitted</p>';
    //print_r($_POST); die();
    $person = [];
    $person['enemies'] = [];
    $person['name'] = $_POST['name'];
    $person['surname'] = $_POST['surname'];
    $person['friends'] = !empty($_POST['friends']) ? $_POST['friends'] : [];
    $person['created_at'] = date('Y-m-d h:i:s');
    $person['updated_at'] = date('Y-m-d h:i:s');

    //print_r($person);

    //replace original person with modified copy
    $id = getNextId($people);
    $people[$id] = $person;

    savePeople($people);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>person page</title>
</head>
<body>
<h2>PERSON</h2>
 <form action="" method="post">
    NAME: <input type="text" name="name" value=""><br />
     Surname: <textarea name="surname" rows="4" cols="50"></textarea><br />
     <br />FRIENDS:
     <select name="friends[]" multiple>
         <?php
         foreach ($people as $id => $p) {
             $selected = '';
             echo '<option ' . $selected . '  value="' . $id . '" >' . $p['name'] . ' ' . $p['surname'] . '</option>';
         }
         ?>
         <!--option value="10000" selected>Katerina Demitridou</option>
         <option value="9000" selected>SavviFushini</option>
         <option value="88355" >Angella Neo</option-->
     </select><br /><br />
    <input type="submit" value="CREATE">
</form>
<br />
<a href="people.php">Go to PEOPLE page</a>
</body>

</html>
