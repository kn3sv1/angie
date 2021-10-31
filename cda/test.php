<?php
/*
$hobbies = array("sleep","eat","take pills for headache");

$hobbies_angie = '';
for($i = 0; $i < count($hobbies); $i = $i + 1) {
    $hobbies_angie = $hobbies_angie . $hobbies[$i] . ", ";
}

echo $hobbies_angie;
*/

$cats = array(
            array("name" => "Teddy","age" => 40, "address" => "agia fyla"),
            array("name" => "Ginger","age" => 50, "address" => "neou delxi"),
            array("name" => "Lucki","age" => 70, "address" => "agia fyla"),
);

$result = '';
for($i = 0; $i < count($cats); $i = $i + 1) {
    $result = $result . "<p>Name:<span style='color:red'>" . $cats[$i]["name"] . "</span>, Age:" . $cats[$i]["age"] . ", Address: " .  $cats[$i]["address"] . "</p>";
}

echo $result;