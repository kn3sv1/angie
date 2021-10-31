<?php
function getCatStyle($cat_name) {
	$style = '';
	if ($cat_name == 'Ginger') {
		$style = "background-color:#95f1c5";
	} elseif ($cat_name == 'Tedaki') {
		$style = "background-color:#cba7ff";
	}
	return $style;
}

$catslimassol = array(
		array('name' => 'Tedaki', 'photo' => 'tedaki.png'),
		array('name' => 'Ginger', 'photo' => 'ginger.png'),
		array('name' => 'Lucky', 'photo' => 'lucky.png'),
		array('name' => 'Amanda', 'photo' => 'amanda.png'),
		array('name' => 'Hitler', 'photo' => 'hitler.png'),
		array('name' => 'Blacky', 'photo' => 'blacky.png'),
		array('name' => 'Teddy', 'photo' => 'teddy.png'),
		array('name' => 'Gucci', 'photo' => 'gucci.png'),
		array('name' => 'Harry', 'photo' => 'harry.png'),
		array('name' => 'Lucy', 'photo' => 'lucy.png'),
);		


$catspaphos = array(
		array('name' => 'Fluffy', 'photo' => 'fluffy.png'),
		array('name' => 'Cleopatra', 'photo' => 'cleopatra.png'),
		array('name' => 'Tommy', 'photo' => 'tommy.png'),
		array('name' => 'Charly', 'photo' => 'charly.png'),
		array('name' => 'Blacky', 'photo' => 'blacky.png'),
		array('name' => 'Ginger', 'photo' => 'ginger.png'),
		array('name' => 'Diamond', 'photo' => 'diamond.png'),
		array('name' => 'Tedaki', 'photo' => 'tedaki.png'),
		array('name' => 'Gucci', 'photo' => 'gucci.png'),
		array('name' => 'Amanda', 'photo' => 'amanda.png'),
);

$commoncats = array();

for ($i = 0; $i < count($catslimassol); $i++) {
	for ($a = 0; $a < count($catspaphos); $a++) {
		if ($catslimassol[$i]['name'] == $catspaphos[$a]['name']) {
			$commoncats[] = $catslimassol[$i];
		}	
	}	

}	
echo '<pre>';
print_r($commoncats); 

?>

<!DOCTYPE html>
<html>
<head>
<style>
* {
	box-sizing: border-box;
}
table {
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid black;
  text-align: left;
  padding: 8px;
}
</style>
</head>

<body>


<div style="float:left;width:50%;padding:0 20px;">
<h1>Cats of Limassol</h1>
	<table>
	  <tr>
		<th><h2>Name<h2></th>
		<th><h2>Photo<h2></th>
	  </tr>
	  <?php for ($i = 0; $i < count($catslimassol); $i++) { 
			/*
			$style = "";
			if ($catslimassol[$i]['name'] == 'Ginger') {
				$style = "background-color:#95f1c5";
			} elseif ($catslimassol[$i]['name'] == 'Tedaki') {
				$style = "background-color:#cba7ff";
			}
			*/
			$style = getCatStyle($catslimassol[$i]['name']);
	  ?>
		  <tr style="<?php echo $style ?>">
			<td><?php echo $catslimassol[$i]['name'] ?></td>
			<td><img width="200" src="photos_of_cats/<?php echo $catslimassol[$i]['photo'] ?>"></td>
		  </tr>
	  <?php } ?>
	</table>	
</div><div style="float:left;width:50%;padding:0 20px;">
<h1>Cats of Paphos</h1>
	<table>
	  <tr>
		<th><h2>Name<h2></th>
		<th><h2>Photo<h2></th>
	  </tr>
	  <?php for ($i = 0; $i < count($catspaphos); $i++) { 
			$style = getCatStyle($catspaphos[$i]['name']);
	  ?>
		  <tr style="<?php echo $style ?>">
			<td><?php echo $catspaphos[$i]['name'] ?></td>
			<td><img width="200" src="photos_of_cats/<?php echo $catspaphos[$i]['photo'] ?>"></td>
		  </tr>
	  <?php } ?>
	</table>
</div><div style="clear:both"></div>