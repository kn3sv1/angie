<?php

// http://html5.local/angie/lesson08_students/

include 'students.php';

?>
<!DOCTYPE html>
<html>
<head>
<style type="text/css">
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

<h2>Students Table</h2>
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
		<td><a href="detail.php?idbbbbbbbbbbbb=<?php echo $i; ?>"><?php echo $students[$i]['name']; ?></a></td>
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
					echo $students[$i]['hobbies'][$a];
					echo ",<br />";
				}
			?>
		</td>
	  </tr>
  <?php } ?>
</table>

</body>
</html>


