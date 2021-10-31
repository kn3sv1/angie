
<?php

echo "<h1>Names of cats in Agia Fyla:</h1>";
echo "<h2>" . $_GET["name"] . "</h2>";

echo "<h2>Color: " . $_GET["color"] . "</h2>";
echo '<img src="photos_of_cats/' . $_GET["name"] . '.png"  />';


$cat_description = array("beautiful", "big", "long hair", "has injection");


if ($_GET["name"] == "Tedaki" || $_GET["name"] == "Hitler") {
	for ($i=0; $i < count($cat_description); $i=$i+1) {
		echo "<br/>";
		echo $cat_description[$i];
	}
} else {
	echo "<p>No description</p>";
}
