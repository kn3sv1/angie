<?php

// http://html5.local/angie/lesson04_table/

include 'companies.php';

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

<h2>CONTENT</h2>

<table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <?php for($i = 0; $i < count($companies); $i = $i + 1) { ?>
	  <tr>
	    <td><?php echo $companies[$i]['company'] ?></td>
        <td><?php echo $companies[$i]['contact'] ?></td>
        <td><?php echo $companies[$i]['country'] ?></td>
	  </tr>
  <?php } ?>
 
</table>

</body>
</html>


