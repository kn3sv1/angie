<h1>CATS in Agia Fyla:</h1>

<?php




$cats = array(
	0 => array("name" => "Tedaki", "color" => "black and white"),
	1 => array("name" => "Lucky", "color" => "orange and white"),
	2 => array("name" => "Ginger", "color" => "orange"),
	3 => array("name" => "Kiara", "color" => "white, black and orange"),
	4 => array("name" => "Hitler", "color" => "black and white"),
	
);
for ($i = 0; $i < count($cats); $i = $i+1) {
    
	echo '<a href="photos.php?name=' . $cats[$i]["name"] . "&color=" . $cats[$i]["color"] . '">' . $cats[$i]["name"] . '</a><br />';
}

//html link:
//<a href="url">link text</a>