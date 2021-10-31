<?php
$json_string = file_get_contents('cats_list.txt');
$cats = json_decode($json_string, true);

//echo '<pre>';
//print_r($cats);



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
<h2>Cats</h2>

<table>
  <tr>
    <th>index</th> 
	<th>Name</th>  
    <th>Color</th>
	<th>Action</th>
  </tr>	
  <?php for($i = 0; $i < count($cats); $i++) { ?>
  <tr>
    <td><?php echo $i + 1; ?></td>
    <td><?php echo $cats[$i]['name']; ?></td>
    <td><?php echo $cats[$i]['color']; ?></td>
	<td>
		<a href="edit_cat.php?name=<?php echo $cats[$i]['name']; ?>">edit</a>&nbsp;&nbsp;&nbsp;
		<a href="delete_cat.php?name=<?php echo $cats[$i]['name']; ?>">delete</a>
	</td>
  </tr>
  <?php } ?>
</table>

</body>
</html>