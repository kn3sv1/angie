<?php
//array = []

$doctors = [
	['name' => 'Andreas', 'surname' => 'Pantazis', 'occupation' => 'gynecology', 'salary' => 100000],
	['name' => 'Andreas2', 'surname' => 'Theodoulou', 'occupation' => 'gynecology', 'salary' => 100000],
	['name' => 'Angelos', 'surname' => 'Ahileous', 'occupation' => 'urology', 'salary' => 30000],
	['name' => 'Martha', 'surname' => 'Ntoumanidou', 'occupation' => 'gynecology', 'salary' => 20000],
	['name' => 'Andros', 'surname' => 'Charalambous', 'occupation' => 'general_sergeant', 'salary' => 50000],
];

$total_salary = 0;
for($i = 0; $i < count($doctors); $i++) {
	$total_salary = $total_salary + $doctors[$i]['salary'];
}

$max_salary = 0;
for($i = 0; $i < count($doctors); $i++) {
	if ($doctors[$i]['salary'] > $max_salary) {
		$max_salary = $doctors[$i]['salary'];
	}	
}

$min_salary = $doctors[0]['salary'];
for($i = 1; $i < count($doctors); $i++) {
	if ($doctors[$i]['salary'] < $min_salary) {
		$min_salary = $doctors[$i]['salary'];
	}	
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
<h2>Doctors</h2>

<table>
  <tr>
	<th>Number</th>  
    <th>First Name</th>
    <th>Last Name</th>
    <th>Occupation</th>
	<th>Salary</th>
  </tr>	
  <?php for($i = 0; $i < count($doctors); $i++) { ?>
  <tr>
    <td><?php echo $i + 1; ?></td>
    <td><?php echo $doctors[$i]['name']; ?></td>
    <td><?php echo $doctors[$i]['surname']; ?></td>
    <td><?php echo $doctors[$i]['occupation']; ?></td>
    <td><?php echo $doctors[$i]['salary']; ?></td>
  </tr>
  <?php } ?>
  <tr>
    <td><strong>Total Salary:</strong></td>
    <td></td>
	<td></td>
    <td></td>
    <td><?php echo $total_salary; ?></td>
  </tr>
  <tr>
    <td><strong>Max Salary:</strong></td>
    <td></td>
    <td></td>
    <td></td>	
    <td><?php echo $max_salary; ?></td>
  </tr>
  <tr>
    <td><strong>Min Salary:</strong></td>
    <td></td>
	<td></td>
    <td></td>
    <td><?php echo $min_salary; ?></td>
  </tr>
  <tr>
    <td><strong>Total amount of doctors:</strong></td>
    <td></td>
    <td></td>
	<td></td>
    <td><?php echo count($doctors); ?></td>
  </tr>
</table>

</body>
</html>