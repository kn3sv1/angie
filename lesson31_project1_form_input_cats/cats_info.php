<?php

include_once "function.php";

$catsInfo = cats_info();

//print_r($catsInfo);

foreach ($catsInfo as $key => $newArray) {
    echo"<div style='float:left; margin: 10px'><p style='color:#f77e05; font-weight: bold; font-size: 25px'><a href='edit_page.php?id=" . $key . "'><span style='color:red'>Cat number:" . $key . "  is  " . $newArray['name']
         . "</a></span><br />Color is: " . $newArray['color']
         . "<br />Comes from: " . $newArray['city']
         . "<br /><br /><img src='{$newArray['photo']}?random=" . rand(1,1000) . "' width='200' height='200' /><br /><br /></p></div>";
}

echo "<a style='color:blue' href='input_form.php'>Main page</a>";