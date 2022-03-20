<?php

include_once "function.php";

$info = getInfo();

//print_r($info);

foreach ($info as $key => $text) {
    echo'<p style="font-weight: bold; font-size: 17px;"><span style="color:blueviolet;">
        <a href="info_edit.php?id=' . $key . '"> ' . $text['name'] . " " . $text['surname'] . '</a></span>'
        .  "<br />" . $text['address']
        . "<br />" . $text['city']
        . "<br />" . $text['country']
        //not everyone has photo key. we need to fix everything in array in file data.json first
        //. "<br />" . "<img src='{$text['photo']}' />"
        . ( !empty($text['photo']) ? "<br /><img src='{$text['photo']}' width='200' height='200' />": '' ) . "<br /><br />"
        . ( !empty($text['photo_additional']) ? "<br />Additional:<img src='{$text['photo_additional']}' width='300' height='300' />": '' )
        . "<br /><br /></p>";
}


echo '<a style="color:red" href="form_input.php">Go back to home page</a>';

echo "<br /><br />";

//write to file without JSON
file_put_contents("info/example.txt", "<p style='color:green'>hello world!</p>");
//file_put_contents("info/example.txt", "<p style='color:green'>hello world! " . date('Y-m-d h:i:s') .  "</p>". PHP_EOL, FILE_APPEND);

$text = file_get_contents("info/example.txt");

echo '<br />Text from file:<br />';
echo $text;
