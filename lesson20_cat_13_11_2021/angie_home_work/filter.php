<?php

$cats = array(
	 0 => array("name" => "Teddaki", "age" =>90, "city" => "Limassol", "friend" => "Hitler", "photo" => "tedaki.png"),
	 1 => array("name" => "Ginger", "age" =>1, "city" => "Paphos", "friend" => "Teddaki", "photo" => "ginger.png" ),
	 2 => array("name" => "Amanda", "age" =>1, "city" => "Larnaka", "friend" => "Ginger", "photo" => "amanda.png"),
	 3 => array("name" => "Lucky", "age" => 2, "city" => "Paphos", "friend" => "Teddaki", "photo" => "lucky.png"),
	 4 => array("name" => "Hitler", "age" =>1, "city" => "Larnaka", "friend" => "Amanda", "photo" => "hitler.png"),
	 5 => array("name" => "Maria", "age" =>1, "city" => "Agya Napa", "friend" => "Amanda", "photo" => "hitler.png"),
	 6 => array("name" => "Andreas", "age" =>60, "city" => "filousa", "friend" => "Andreas", "photo" => "hitler.png"),
);

$filtered_cats = [];

/*
$cities = array(
	'Limassol' => 'city: Limassol',
	'Paphos' => 'city: Paphos',
	'Larnaka' => 'city: Larnaka',
);
*/
/*
$cities = array();
foreach($cats as $index => $cat) {
	$city = $cat['city'];
	$cities[$city] = 'city: ' . $city;
}
*/
$cities = array();
for ($i = 0; $i < count($cats); $i++) {
	$city = $cats[$i]['city'];
	$cities[$city] = 'city: ' . $city;
}


/*
$ages = array();
foreach($cats as $index => $cat) {
	$age = $cat['age'];
	$ages[$age] = 'age: ' . $age;
}
*/
$ages = array();
for ($i = 0; $i < count($cats); $i++) {
	$age = $cats[$i]['age'];
	$ages[$age] = $age;
}

/*
//associative unique key
$roma = array(
	'roma' => 'test1',
	'roma' => 'test2',
	'roma' => 'test3',
	1 => 1,
	1 => 1,
	1 => 1,
	60 => 60,
	60 => 70,
);
print_r($roma);

//numeric array index will auto duplicated
print_r('<br />ANGELA BELOW');
$angela = array();
$angela[] = 'test1';
$angela[] = 'test2';
$angela[] = 'test3';

$angela[] = 1;
$angela[] = 1;
$angela[] = 1;

$angela[] = 60;
$angela[] = 70;
print_r($angela);
*/


for ($i = 0; $i < count($cats); $i++) {
	
	if (!empty($_GET['city']) && $_GET['city'] != $cats[$i]['city']) {
		continue;	
		
	}
	
	$filtered_cats[] = $cats[$i];
}
//echo '<pre>'; print_r($filtered_cats);
?>

<form action=" " method="get">
	
	<label for="city_label">Choose a city:</label>
	<select id="city_label" name="city">
		<option value="">All</option>
		<?php foreach($cities as $key => $value) {
				$selected = (!empty($_GET['city']) && $_GET['city'] == $key) ? 'selected' : '';			
			?>
			<option <?php echo $selected; ?> value="<?php echo $key; ?>"><?php echo $value; ?></option>			
		<?php } ?>	
	</select>
	
	&nbsp;
	&nbsp; 
	
	<!--
	<label for="city_label">Choose a age:</label>
	<select id="city_label" name="age">
		<option value="">All</option>
					<option  value="90">age: 90</option>			
					<option  value="1">age: 1</option>			
					<option  value="2">age: 2</option>			
					<option  value="60">age: 60</option>			
			
	</select>
	
	-->
	
	<label for="city_label">Choose a age:</label>
	<select id="city_label" name="age">
		<option value="">All</option>
		<?php foreach($ages as $age) {
				$selected = (!empty($_GET['age']) && $_GET['age'] == $key) ? 'selected' : '';			
			?>
			<option <?php echo $selected; ?> value="<?php echo $age; ?>">Age: <?php echo $age; ?></option>			
		<?php } ?>	
	</select>
	
	&nbsp;
	&nbsp;  
	<input type="submit" value="SHOW">
</form>  
<?php

echo '<pre>'; print_r($filtered_cats);