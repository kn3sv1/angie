<?php

$json_string = file_get_contents('cats_list.txt');
$cats = json_decode($json_string, true);


$name = isset($_GET['name']) ? $_GET['name'] : null;

if ($name === null) {
	throw new Exception('PLEASE PROVIDE CAT URL PARAM!');
}

$cat = null;
for($i = 0; $i < count($cats); $i++) {
	if ($cats[$i]['name'] == $name) {
		$cat = $cats[$i];
		break;
	}
}

if ($cat === null) {
	throw new Exception('CAT does not exist');
}



?>

<!DOCTYPE html>
<html>
<head>
<style>
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
<h2>Cat</h2>

<table>
  <tr> 
	<th>Name</th>  
    <th>Color</th>
  </tr> 
  <tr>
	<td><?php echo $cat['name']; ?></td>
	<td><?php echo $cat['color']; ?></td>
  </tr>
</table>

</body>
</html>


