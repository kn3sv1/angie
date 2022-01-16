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

for ($i = 0; $i < count($cats); $i++) {
	
	if (!empty($_GET['city']) && $_GET['city'] != $cats[$i]['city']) {
		continue;	
		
	}
	
	$filtered_cats[] = $cats[$i];
}
?>

<form action=" " method="get">
	
	<label for="city_label">Choose a city:</label>
	<select id="city_label" name="city">
		<option value="">All</option>
		<?php for ($i = 0; $i < count($cats); $i++) { $key = $cats[$i]['city'];
				$selected = (!empty($_GET['city']) && $_GET['city'] == $key) ? 'selected' : '';			
			?>
			<option <?php echo $selected; ?> value="<?php echo $key; ?>">City: <?php echo $key; ?></option>			
		<?php } ?>	
	</select>
	&nbsp;
	&nbsp;  
	<input type="submit" value="SHOW">
</form>	
<?php

echo '<pre>'; print_r($filtered_cats);
include 'comments1.php';



