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
	<th>PHOTO</th>
  </tr>
<?php  
    for ($i = 0; $i < count($cats); $i++) {
        //wrong!!
        //echo "<tr>" . $cats[$i] . "</tr>";
        echo "<tr>";
            //if new field e.g surname will appear in array it will automatically show in table data
            foreach ($cats[$i] as $key => $value) {
                if ($key == 'photo') {
                    echo '<td><img height="100" src="photo_of_cats/' . $value . '" /></td>';
                } else {
                    echo "<td>" . $value . "</td>";
                }
            }
//        echo "<td>" . $cats[$i]['name'] . "</td>";
//        echo "<td>" . $cats[$i]['age'] . "</td>";
//        echo "<td>" . $cats[$i]['city'] . "</td>";
//        echo "<td>" . $cats[$i]['friend'] . "</td>";
//        echo '<td><img height="100" src="photo_of_cats/' . $cats[$i]['photo'] . '" /></td>';
        echo "</tr>";

    }
?>  
 </table>
</body>
</html> 