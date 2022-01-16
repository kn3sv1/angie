<?php

$cats = array(
	 0 => array("name" => "Teddaki", "age" =>90, "city" => "Limassol", "friend" => "Hitler", "photo" => "tedaki.png"),
	 1 => array("name" => "Ginger", "age" =>1, "city" => "Paphos", "friend" => "Teddaki", "photo" => "ginger.png" ),
	 2 => array("name" => "Amanda", "age" =>1, "city" => "Larnaka", "friend" => "Ginger", "photo" => "amanda.png"),
	 3 => array("name" => "Lucky", "age" => 2, "city" => "Paphos", "friend" => "Teddaki", "photo" => "lucky.png"),
	 4 => array("name" => "Hitler", "age" =>1, "city" => "Larnaka", "friend" => "Amanda", "photo" => "hitler.png"),
);

$cities = array(
	'Limassol' => 'city: Limassol',
	'Paphos' => 'city: Paphos',
	'Larnaka' => 'city: Larnaka',
);

$filtered_cats = [];
/*
//$cat = $cats[$i]
foreach($cats as $i => $cat) {
	if (!empty($_GET['city']) && $cat['city'] != $_GET['city']) {
		continue;
	}
	
	//if age_from 
	
	//if age_to 

	$filtered_cats[] = $cat;
}
*/

for ($i = 0; $i < count($cats); $i++) {
	//skip current cat if he not from past city - parameter in url
	if (!empty($_GET['city']) && $cats[$i]['city'] != $_GET['city']) {
		continue;
	}
	//if age_from 
	if (!empty($_GET['age_from']) && $cats[$i]['age'] < $_GET['age_from']) {
		continue;
	}
	
	//if age_to 
	if (!empty($_GET['age_to']) && $cats[$i]['age'] >= $_GET['age_to']) {
		continue;
	}
	
	//add cat to filtered cats array
	$filtered_cats[] = $cats[$i];
}

?>
<!DOCTYPE html>
<html>
<head>
<style>
body {
	padding: 50px;
}
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
</head>
<body>
<p>
Quick links: <br />
<a href="/angie/lesson20_cat_13_11_2021/cats_table.php?city=Limassol">Limassol</a><br /><br />
<a href="/angie/lesson20_cat_13_11_2021/cats_table.php?city=Paphos">Paphos</a><br /><br />
<a href="/angie/lesson20_cat_13_11_2021/cats_table.php?city=Limassol&age_to=18">Limassol (-18)</a><br /><br />
<a href="/angie/lesson20_cat_13_11_2021/cats_table.php?age_from=18">(+18)</a><br /><br />
</p><br />
<form action="cats_table.php" method="get">
<!--
	<label for="city_label">Choose a city:</label>
	<select id="city_label" name="city">
		<option value="">All</option>
		<option value="Limassol">city: Limassol</option>
		<option value="Paphos">city: Paphos</option>
		<option value="Larnaka">city: Larnaka</option>
	</select>
-->
	<label for="city_label">Choose a city:</label>
	<select id="city_label" name="city">
		<option value="">All</option>
		<?php foreach($cities as $key => $value) {
				$selected = (!empty($_GET['city']) && $_GET['city'] == $key) ? 'selected' : '';			
			?>
			<option <?php echo $selected; ?> value="<?php echo $key; ?>"><?php echo $value; ?></option>			
		<?php } ?>	
	</select>
  <!-- SPACE in HTML: &nbsp; -->
  &nbsp;
  &nbsp;
	<label for="age_from_label">Choose age from (including):</label>
	<select id="age_from_label" name="age_from">
		<option value="">All</option>
		<?php for($i = 1; $i < 101; $i++) {
			$selected = (!empty($_GET['age_from']) && $i == $_GET['age_from']) ? 'selected' : '';
			?>
			<option <?php echo $selected; ?> value="<?php echo $i; ?>"><?php echo $i; ?></option>
		<?php } ?>
	</select>
  &nbsp;
  &nbsp;
	<label for="age_to_label">Choose age to (not including):</label>
	<select id="age_to_label" name="age_to">
		<option value="">All</option>
		<?php for($i = 1; $i < 101; $i++) {
			/*
			$selected = '';
			if (!empty($_GET['age_to']) && $i == $_GET['age_to']) {
				$selected = 'selected';
			}
			*/
			//ternary more short way
			$selected = (!empty($_GET['age_to']) && $i == $_GET['age_to']) ? 'selected' : '';
			?>
			<option <?php echo $selected; ?> value="<?php echo $i; ?>"> number <?php echo $i; ?></option>
		<?php } ?>
	</select>
  &nbsp;
  &nbsp;
  <input type="submit" value="Show Cats">
</form>
<h1 style="text-align: center">CATS Table</h1> 
<table>
  <tr>
	<th>NAME</th>
    <th>AGE</th>
    <th>CITY</th>
    <th>FRIEND</th>
	<th>PHOTO</th>
  </tr>

<?php  for ($i = 0; $i < count($filtered_cats); $i++) { $name = $filtered_cats[$i]['name']; ?>
  <tr>  
	<td><a href="/angie/lesson20_cat_13_11_2021/site_test.php?name=<?php echo $name; ?>"><?php echo $name; ?></a></td>  
	<td><?php echo $filtered_cats[$i]['age']; ?></td>  
	<td><?php echo $filtered_cats[$i]['city']; ?></td>
    <td><?php echo $filtered_cats[$i]['friend']; ?></td>	
	<td><img width="150" src="photo_of_cats/<?php echo $filtered_cats[$i]['photo'];?>"/></td>
  </tr>	
<?php  }  ?>

 </table>
<?php include 'comments.php'; ?>
</body>
</html> 