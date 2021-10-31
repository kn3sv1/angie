<?php

// http://html5.local/angie/lesson01/print.php?name=angie&age=36&city=limassol&show_times=10

//echo '<pre>';
//print_r($_GET);

$name = 'angie';
if (isset($_GET['name'])) {
	$name = $_GET['name'];
}
$age = $_GET['age'];
$city = $_GET['city'];

echo "<p style='color:green'>Your name is: $name</p>";
echo "<p style='color:red'>Your age is: $age</p>";
echo "<p style='color:blue'>Your city is: $city</p>";

$showTimes = $_GET['show_times'];
for ($i = 0; $i < $showTimes; $i = $i + 1) {
	echo "<p style='color:red'>good bye $i</p>";
}

