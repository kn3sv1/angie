<!--
<h2>Student name: Elena</h2>

<img src="photos/Elena.png"  />

-->
<?php
	
//echo $_GET["name"];
echo "<h1>Student name: " . $_GET["name"] . "</h1>";
echo "<h2>Age: " . $_GET["age"] . "</h2>";
echo '<img src="photos/' . $_GET["name"] . '.png"  />';


