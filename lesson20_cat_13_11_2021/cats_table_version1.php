<?php

$cats = array(
	 array("name" => "Teddaki", "age" => "2 years", "city" => "Limassol", "friend" => "Hitler", "photo" => "tedaki.png"),
	 array("name" => "Ginger", "age" => "1 years", "city" => "Limassol", "friend" => "Teddaki", "photo" => "ginger.png" ),
	 array("name" => "Amanda", "age" => "12 months", "city" => "Limassol", "friend" => "Ginger", "photo" => "amanda.png"),
	 array("name" => "Lucky", "age" => "2 years", "city" => "Limassol", "friend" => "Teddaki", "photo" => "lucky.png"),
	 array("name" => "Hitler", "age" => "1 years", "city" => "Limassol", "friend" => "Amanda", "photo" => "hitler.png"),
);	 
	 


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

<h1 style="text-align: center">CATS Table</h1> 
<table>
  <tr>
	<th>NAME</th>
    <th>AGE</th>
    <th>CITY</th>
    <th>FRIEND</th>
	<td>PHOTO</th>
  </tr>
<?php  
  for ($i = 0; $i < count($cats[$i]); $i++) {
    echo "<tr>" . $cats[$i] . "</tr>";  
	  
	  
	  
  }
?>  
 </table>
</body>
</html> 