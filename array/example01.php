<?php
/*
$cats = array(
	0 => "Tedaki",
	1 => "Lucky",
	2 => "Teddy2",
	3 => "Ginger",
);

//echo $cats[3];

for ($i = 0; $i < count($cats); $i =$i +1 ) { 
	echo $cats[$i], ", ";
}
*/
/*
$cats = array(
	"dd1" => "Tedaki",
	"dd2" => "Lucky",
	"dd5" => "Teddy2",
	"dd6" => "Ginger",
);
echo $cats["dd6"];
*/


$cats = array(
	0 => array("name" => "Tedaki", "age" => 32, "color" => "red", "size" => 16 ),
	1 => array("name" => "Lucky", "age" => 30, "color" => "blue", "size" => 26 ),
	2 => array("name" => "Teddy2", "age" => 42, "color" => "green", "size" => 10 ),
	3 => array("name" => "Ginger", "age" => 52, "color" => "black", "size" => 18 ),
);

$cats[0]["name"] = "TEDAKI444";


//http://html5.local/angie/array/example01.php?tedaki_color=green
if (isset($_GET["tedaki_color"])) {
	$cats[0]["color"] = $_GET["tedaki_color"];	
}


echo "<p style='text-align: center; color:red; font-size: 20'>NAME:</p>";
for ($i = 0; $i < count($cats); $i =$i +1 ) { 
	echo $cats[$i]["name"] . "," . "<br />";
}


//echo "<span style='color:red '>Tedaki </span>, ";

// echo "<p style='font-size: 32px'>Tedaki</p>";
for ($i = 0; $i < count($cats); $i =$i +1 ) { 
	//echo "<span style='color:" . $cats[$i]["color"] . "'>" . $cats[$i]["name"] . "</span>, ";
	//echo "<p style='font-size:". $cats[$i]["size"] . "'>". $cats[$i]["name"] . "</p>, ";
	
	//echo "<p style='color:" . "red" . "'>" . $cats[$i]["name"]. "</p>";
	if ($cats[$i]["name"] == "Lucky") {
		echo "<span style='font-size:30;color:" . $cats[$i]["color"] . "'>" . $cats[$i]["name"]. "</span>";
	} else {	
		echo "<p style='color:" . $cats[$i]["color"] . "'>" . $cats[$i]["name"]. "</p>";
	}
}


