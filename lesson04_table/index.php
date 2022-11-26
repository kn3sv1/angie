 <?php

// http://html5.local/angie/lesson04_table/

include 'students.php';

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

<h1 style="text-align: center">Students Table</h1> 
<table>
  <tr>
	<th>ID</th>
    <th>Name</th>
    <th>Full Name</th>
    <th>Age</th>
	<th>Photo</th>
	<th>Favorite color</th>
	<th>Hobbies</th>
  </tr>
  <?php for($i = 0; $i < count($students); $i = $i + 1) { ?>
	  <tr>
		<td><?php echo $i; ?></td>
		<td><?php echo $students[$i]['name']; ?></td>
		<td><?php echo $students[$i]['full_name']; ?></td>
		<td><?php echo $students[$i]['age']; ?></td>
		<td><img width="70" src="photos/<?php echo $students[$i]['photo']; ?>" /></td>
		<td>
			<?php echo $students[$i]['favorite_color']; ?>
			<div style="width:20px;height:20px;background-color:<?php echo $students[$i]['favorite_color']; ?>"></div>
		</td>
		<td>
			<?php 
				for ($a = 0; $a < count($students[$i]['hobbies']); $a = $a + 1) { 
					if ($students[$i]['hobbies'][$a] == 'dancing') {
						echo "<span style='color:red'>" . $students[$i]['hobbies'][$a] . '</span>';
					} else {
						echo $students[$i]['hobbies'][$a];
					}
					//if it is last element in array $a = 3 and count(...) = 3 so we will not jump inside IF(...) {}
					if ($a < (count($students[$i]['hobbies']) - 1) ) {
						echo ",<br />";
					}
				}
			?>
		</td>
	  </tr>
  <?php } ?>
</table>

</body>
</html>


