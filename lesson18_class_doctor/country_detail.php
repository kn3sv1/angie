<?php

include 'country_list.php';



$id = isset($_GET['id']) ? $_GET['id'] : null;

if (empty($countries[$id])) {
	throw new Exception('COUNTRY does not exist');
}

$country = $countries[$id];


//echo '<pre>';
//print_r($country);

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
<h2>Country Detail Page</h2>

<table>
  <tr>
	<th>Country</th>  
    <th>Total cases</th>
    <th>New cases</th>
    <th>Total deaths</th>
  </tr>	
  <tr>
    <td>
		<img height="60" src="<?php echo $country['image']; ?>" /> 
		<?php echo $country['name']; ?>
	</td>
    <td><?php echo $country['Total_cases']; ?></td>
    <td><?php echo $country['New_cases']; ?></td>
    <td><?php echo $country['Total_deaths']; ?></td>
  </tr>
</table>

</body>
</html>