<?php
//step1: here we should get $person from array
include_once "function.php";

$people = getPeople();
//print_r($people);



if (empty($_GET['id'])) {
    die('<span style="color:red">YOU DIDNT PROVIDE ID OF PERSON</span>');
}
if (!array_key_exists($_GET['id'], $people)) {
    die('<span style="color:red">YOU PROVIDED WRONG ID</span>');
}
//get copy of person from array
$person = $people[$_GET['id']];

//print_r($person);

if (!empty($_POST['name'])) {
    echo '<p style="color:green">succesfully submitted</p>';
    //print_r($_POST); die();
    $person['name'] = $_POST['name'];
    $person['surname'] = $_POST['surname'];
    $person['friends'] = !empty($_POST['friends']) ? $_POST['friends'] : [];
    $person['updated_at'] = date('Y-m-d h:i:s');

    //print_r($person);

    //replace original person with modified copy
    $people[$_GET['id']] = $person;

    savePeople($people);
}



//step3: We need to store array people in file
//step4: Create html form
//step5: Change friend

//print_r(getNextId($people));

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>person page</title>
</head>
<body>
<h2>PERSON</h2>
<p>Person was created at: <?php echo $person['created_at']; ?></p>
<p>Person was last updated at: <?php echo $person['updated_at']; ?></p>
 <form action="" method="post">
    NAME: <input type="text" name="name" value="<?php echo $person["name"]; ?>"><br />
     Surname: <textarea name="surname" rows="4" cols="50"><?php echo $person["surname"]; ?></textarea><br />
     <br />FRIENDS:
     <select name="friends[]" multiple>
         <?php
         foreach ($people as $id => $p) {
             if ($id == $_GET['id']) {
                 continue;
             }
             $selected = in_array($id, $person['friends']) ? '  selected': '';
             echo '<option ' . $selected . '  value="' . $id . '" >' . $p['name'] . ' ' . $p['surname'] . '</option>';
         }
         ?>
         <!--option value="10000" selected>Katerina Demitridou</option>
         <option value="9000" selected>SavviFushini</option>
         <option value="88355" >Angella Neo</option-->
     </select><br /><br />
    <input type="submit" value="UPDATE">
</form>
<br />
<a href="people.php">Go to PEOPLE page</a>
</body>

</html>
