<!DOCTYPE html>
<html>

<body>
<?php

function menu() {
	
	$menu = array(
		'tedaki' => 'Tedaki',
		'hitler' => 'Hitler',
		'amanda' => 'Amanda',
		'ginger' => 'Ginger',
	);
	foreach($menu as $key => $name) {

		echo '<a href="/angie/lesson20_cat_13_11_2021/site_test.php?name=' . $key . '">' . $name . '</a><br/><br/>';
	}
}

menu();	

if (!empty($_GET['name'])) {
	include 'cat_pages2/' . $_GET['name'] . '.php';
	$fileForCat = $_GET['name'] . '.txt';
	include 'comments.php';
} else {
	 menu();
 }


?>

