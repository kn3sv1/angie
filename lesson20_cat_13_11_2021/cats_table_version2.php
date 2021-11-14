<?php

$cats = array(
	 0 => array("name" => "Teddaki", "age" =>30, "city" => "Limassol", "friend" => "Hitler", "photo" => "tedaki.png"),
	 1 => array("name" => "Ginger", "age" =>1, "city" => "Paphos", "friend" => "Teddaki", "photo" => "ginger.png" ),
	 2 => array("name" => "Amanda", "age" =>1, "city" => "Larnaka", "friend" => "Ginger", "photo" => "amanda.png"),
	 3 => array("name" => "Lucky", "age" => 2, "city" => "Paphos", "friend" => "Teddaki", "photo" => "lucky.png"),
	 4 => array("name" => "Hitler", "age" =>1, "city" => "Larnaka", "friend" => "Amanda", "photo" => "hitler.png"),
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
	padding:50px;
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
<form action="cats_table.php">
	<label for="city">Choose a city:</label>
	<select id="city" name="city">
		<option value="">All</option>
		<option value="Limassol">Limassol</option>
		<option value="Paphos">Paphos</option>
		<option value="Larnaka">Larnaka</option>
	</select>
  <!-- SPACE in HTML: &nbsp; -->
  &nbsp;
  &nbsp;
	<label for="age_from">Choose age from (including):</label>
	<select id="age_from" name="age_from">
		<option value="">All</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
	</select>
  &nbsp;
  &nbsp;
	<label for="age_to">Choose age to (not including):</label>
	<select id="age_to" name="age_to">
		<option value="">All</option>
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option value="5">5</option>
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

<?php  for ($i = 0; $i < count($filtered_cats); $i++) { ?>
  <tr>  
	<td><?php echo $filtered_cats[$i]['name']; ?></td>  
	<td><?php echo $filtered_cats[$i]['age']; ?></td>  
	<td><?php echo $filtered_cats[$i]['city']; ?></td>
    <td><?php echo $filtered_cats[$i]['friend']; ?></td>	
	<td><img width="150" src="photo_of_cats/<?php echo $filtered_cats[$i]['photo'];?>"/></td>
  </tr>	
<?php  }  ?>

 </table>
</body>
</html> 