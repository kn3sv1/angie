<?php

// http://html5.local/angie/lesson06_array/cat1.php?age=35

// http://html5.local/angie/lesson06_array/cat1.php?name=Ginger&age=4&hobbies[]=sleep&hobbies[]=eat

$age = 28;
if (isset($_GET['age'])) {
	$age = $_GET['age'];
}

$name = "Teddy";
if (isset($_GET['name'])) {
	$name = $_GET['name'];
}	
//print_r($age);

$hobbies = array("sleep","eat");
if (isset($_GET['hobbies'])) {
	$hobbies = $_GET['hobbies'];
}

//print_r($hobbies);	
$hobbies_angie = '';
for($i = 0; $i < count($hobbies); $i = $i + 1) {
	$hobbies_angie = $hobbies_angie . $hobbies[$i] . ", ";
	// $hobbies_angie = '' . 'sleep' . ", ";
	/*if ($i < (count($hobbies_angie) - 1) ) {
						echo ",<br />"; why will not work - Angie question
	}*/
}
?>
<br />
<img src="CAT1.png" />
<p> Name :<?php echo $name; ?></p>
<p> Age :<?php echo $age; ?></p>
<p> Hobbies :<?php echo $hobbies_angie; ?></p>

I converted array to string to make more readable and not to have too much code in echo.  We seperate php from html.