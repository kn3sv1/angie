<?php
// PHP program to demonstrate the use of current
// date since Unix Epoch

//$script_tz = date_default_timezone_get();
//echo $script_tz;
date_default_timezone_set('Europe/Athens');

// variable to store the current time in seconds
$currentTimeinSeconds = time();

// converts the time in seconds to current date
$currentDate = date(' h:i:s d-m-Y', $currentTimeinSeconds);

echo "<p style='color:red'>The current time is:</p>";

echo "<p style='color:green'>";

// prints the current date
echo ($currentDate);


echo "</p>";


$current_hour = date('H', $currentTimeinSeconds);
echo $current_hour;


//$current_hour = 11;
if($current_hour >= 14) { 
	echo "<p style='color:red'>Good eveneing</p>";
}	
else {
	echo "<p style='color:blue'>Good morning</p>";
}	


$text = file_get_contents("123.txt");// this function gets text from a file already created. if file doesnt exist there will be an error.
//echo $text;

$text_changed = str_replace("Angie","Roma", $text);
echo $text_changed;

file_put_contents("567.txt",$text_changed);//this function creats new file if it doesnt exist or overwrites it.

// It will be called 123456789.txt
//header('Content-Disposition: attachment; filename="123456789.txt"');
// The PDF source is in 567.txt
//readfile('567.txt');


//header('Content-Disposition: attachment; filename="1234.mp3"');// this gives you ability to save the file as an attatchment because it is not text and browser cannot render. It will open in another program.
//readfile('123.mp3');

?>
