<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br />\n";
}



// assosiative array key is some text before arrow => it is custom 
$fruits = array(
	"apple" => "#da3551",
	"bananna" => "yellow",
	"tomato"=> "red",
	"cucamber"=> "green",
	"potato"=> "brown",
);

echo "<br /><br />\n";

foreach ($fruits as $key => $value) {
	echo "key: $key, value: $value<br />\n";
}

echo "<br /><br />\n";

foreach ($fruits as $key => $value) {
	//<span style="color:#da3551">apple</span>
	echo "<span style='color:$value'>$key</span><br />\n";
}


echo "<br />----------------EXAMPLE 6----------------<br />\n";
$fruit_name = "potato";
$fruit_value = $fruits[$fruit_name];

echo "<span style='color:$fruit_value'>$fruit_name</span><br />\n";

echo "<br />----------------EXAMPLE 7----------------<br />\n";

// numerical arrays - key is number from 0 [0]
/*
$fruits = array(
	array('name' =>"apple", 'color' => "#da3551", 'kg' => "100grams"),
	array('name' =>"bananna", 'color' => "yellow", 'kg' => "100grams"),
);
*/
$fruits = array("apple", "bananna", "tomato", "cucamber", "potato");

//$fruits = array(0 => "apple", 2=> "bananna", 20=>"tomato", 3=>"cucamber", 4=>"potato");
$colors = array("#da3551", "yellow", "red", "green", "brown");

$kgs = array("100grams", "10gramms", "20gramms", "40gramms", "50gramms");

echo "<br /><br />\n";
$one_fruit = $fruits[2];
echo "$one_fruit <br />\n";

echo "<br />----------------EXAMPLE 8----------------<br />\n";

for ($i = 0; $i < count($fruits); $i++) {
	$fruit = $fruits[$i];
	echo "fruit: $fruit <br />\n";
	
	$color = $colors[$i];
	echo "color: $color <br />\n";
	
	$kg = $kgs[$i];
	echo "kilogramm: $kg <br />\n";
	
	echo "<span style='color:$color'>$fruit</span><br />\n";
	
	echo "<br /><br />\n";
}	

echo "<br />----------------EXAMPLE 9----------------<br />\n";
$fruit_name = $fruits[3];
$fruit_value = $colors[3];

echo "<span style='color:$fruit_value'>$fruit_name</span><br />\n";