<?php
//array = []
/*
array inside array: The first array is numerical (so we can count them) and inside is assosiative array.
$doctors = [
	0 => ['name' => 'Andreas', 'surname' => 'Pantazis', 'occupation' => 'gynecology', 'salary' => 100000],
	1 => ['name' => 'Andreas2', 'surname' => 'Theodoulou', 'occupation' => 'gynecology', 'salary' => 100000],
	2 => ['name' => 'Angelos', 'surname' => 'Ahileous', 'occupation' => 'urology', 'salary' => 30000],
	3 => ['name' => 'Martha', 'surname' => 'Ntoumanidou', 'occupation' => 'gynecology', 'salary' => 20000],
	4 => ['name' => 'Andros', 'surname' => 'Charalambous', 'occupation' => 'general_sergeant', 'salary' => 50000],
];
*/

include 'country_list.php';

$total_deaths = 0;
for($i = 0; $i < count($countries); $i++) {
	$total_deaths = $total_deaths + $countries[$i]['Total_deaths'];
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
<h2>Coronavirus Update</h2>

<table>
  <tr>
	<th>Country</th>  
    <th>Total cases</th>
    <th>New cases</th>
    <th>Total deaths</th>
  </tr>	
  <?php for($i = 0; $i < count($countries); $i++) { 
		$name =  $countries[$i]['name'];
		
	   		
  ?>
  <tr>
    <td>
		<img height="30" src="<?php echo $countries[$i]['image']; ?>" /> 
		<a href="country_detail.php?id=<?php echo $i; ?>"><?php echo $name; ?></a>
	</td>
    <td><?php echo $countries[$i]['Total_cases']; ?></td>
    <td><?php echo $countries[$i]['New_cases']; ?></td>
    <td><?php echo $countries[$i]['Total_deaths']; ?></td>
  </tr>
  <?php } ?>
  <tr>
    <td><strong>Total deaths:</strong></td>
    <td></td>
	<td></td>
    <td><?php echo $total_deaths; ?></td>
  </tr>
</table>

</body>
</html>