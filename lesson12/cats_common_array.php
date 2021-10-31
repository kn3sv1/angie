<?php
$limassol = array("teddy", "bob", "clara", "george");
$paphos = array("teddy", "alisa", "john", "george");

$common = array();

for($i = 0; $i < count($limassol); $i++) {
	for($j = 0; $j < count($paphos); $j++) {
		if ($limassol[$i] == $paphos[$j]) {
			$common[] = $paphos[$j];
		}
	}
}
echo '<pre>';
//print_r($common);

/*------------------*/

$limassol = array(
	array('name' => 'teddy', 'photo' => 'teddy.png'),
	array('name' => 'bob', 'photo' => 'bob.png'),
	array('name' => 'clara', 'photo' => 'clara.png'),
	array('name' => 'george', 'photo' => 'george.png'),
);

$paphos = array(
	array('name' => 'teddy', 'photo' => 'teddy.png'),
	array('name' => 'alisa', 'photo' => 'alisa.png'),
	array('name' => 'john', 'photo' => 'john.png'),
	array('name' => 'george', 'photo' => 'george.png'),
);

$common = array();

for($a =0; $a < count($limassol); $a++) {
	for($b = 0; $b < count($paphos); $b++) {
		if ($limassol[$a]['name'] == $paphos[$b]['name']) {
			$common[] = $paphos[$b];
		}	
	}
}

print_r($common);	

?>
<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 50%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

</style>
</head>
<body>

<h2>COMMON cats</h2>

<table>
  <tr>
    <th>NAME</th>
    <th>PHOTO</th>
  </tr>
  <?php for($i = 0; $i < count($common); $i++) { ?>
	  <tr>
	    <td><?php echo $common[$i]['name'] ?></td>
        <td><img width="150" src="photos_of_cats/<?php echo $common[$i]['photo'] ?>"></td>
	  </tr>
  <?php } ?>
 
</table>

</body>
</html>