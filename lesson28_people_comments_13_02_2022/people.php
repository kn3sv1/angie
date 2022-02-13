<?php

include_once "function.php";
$people = getPeople();

?>
<!--p style="color:green">Angella Neo has friends:</p>
Savvi Fushini<br />
Andreas Pantazis<br />
<br />
<p style="color:green">Savvi Fushini has friends:</p>
Angella Neo<br />
Andreas Pantazis<br />
<br />
<p-- style="color:red">PHP IMPLEMENTATION:</p-->
<?php

foreach ($people as $id => $person) {
    echo '<p style="color:green"><a href="person_edit.php?id=' . $id . '">' . $person['name'] . ' ' . $person['surname'] . ' ' . $id .  '</a></p>';
    echo '<p style="color:green">FRIENDS</p>';
    if (empty($person['friends'])) {
        echo '<span style="color:red;font-weight: bold">No friends!</span><br />';
    } else {
        foreach ($person['friends'] as $id) {
            echo $people[$id]['name'] . ' ' . $people[$id]['surname'] . '<br />';
        }
    }


    echo '<p style="color:red">ENIMIES</p>';
    if (empty($person['enemies'])) {
        echo '<span style="color:red;font-weight: bold">No enemies!</span><br />';
    } else {
        foreach ($person['enemies'] as $id) {
            echo $people[$id]['name'] . ' ' . $people[$id]['surname'] . '<br />';
        }
    }
    echo '<br /><br /><br />';
}

//foreach ($people as $id => $person) {
//    echo '<p style="color:green">' . $person['name'] . ' ' . $person['surname'] . ' ' . $id .  ' has enimies:</p>';
//    if (empty($person['enemies'])) {
//        echo '<span style="color:red;font-weight: bold">No enemies!</span><br />';
//    } else {
//        foreach ($person['enemies'] as $id) {
//            echo $people[$id]['name'] . ' ' . $people[$id]['surname'] . '<br />';
//        }
//    }
//}
//
?>
<br /><br />
<a style="color:red;font-size: 22px" href="person_create.php">ADD NEW PERSON</a>
<br /><br /><br /><br /><br /><br />