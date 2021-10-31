<!DOCTYPE html>
<html>
<head>
<?php echo '<link rel="stylesheet" href="cat_pages/my_cats.css">'; ?>
</head>
<body>
<?php

function menu() {
	#step 1
	#include "cat_pages/menu.php";
	
	#step 2
	/*
	echo '
		<a href="/angie/exam_25_09_2021/task2/cats.php?name=amanda">Amanda111111111111111</a><br /><br />
		<a href="/angie/exam_25_09_2021/task2/cats.php?name=hitler">Hitler</a><br /><br />
		<a href="/angie/exam_25_09_2021/task2/cats.php?name=tedaki">Tedaki</a><br /><br />
		<a href="/angie/exam_25_09_2021/task2/cats.php?name=gucci">Gucci</a><br /><br />
		<a href="/angie/exam_25_09_2021/task2/cats.php?name=ginger">Ginge</a><br /><br />
	';
	*/
	#step 3
	$menu = array(
		'amanda' => 'Amanda111111111111111',
		'hitler' => 'Hitler',
		'tedaki' => 'Tedaki',
		'tedaki_exam' => 'Tedaki EXAM',
		'gucci' => 'Gucci',
		'ginger' => 'Ginge',
	);
	foreach($menu as $href => $name) {
		/*
		if ($href == 'hitler') {
			continue;
		}	
		*/
		//echo "$href = $name<br>";
		echo '<a href="/angie/exam_25_09_2021/task2/cats.php?name=' . $href . '">' . $name . '</a><br /><br />';
	}
}	

if (!empty($_GET['name'])) {
	$my_array = array();
	if ($_GET['name'] == 'tedaki' || $_GET['name'] == 'tedaki_exam') {
		include "cat_pages/styles.html";
		$my_array['friends'] = array(
			array('name' => 'Amanda111111111111111', 'photo' => 'cat_pages/images2/amanda.png', 'href' => '/angie/exam_25_09_2021/task2/cats.php?name=amanda'),
			array('name' => 'Hitler', 'photo' => 'cat_pages/images2/hitler.png', 'href' => '/angie/exam_25_09_2021/task2/cats.php?name=hitler'),
			array('name' => 'Ginge', 'photo' => 'cat_pages/images2/ginger.png', 'href' => '/angie/exam_25_09_2021/task2/cats.php?name=ginger'),
		);
	}

	if ($_GET['name'] == 'amanda') {
		$my_array['name'] = 'Amanda';
		$my_array['description'] = 'Amanda is very good cat';
		$my_array['hobbies'] = array('walking', 'eating', 'mey-mey');
	}
	if ($_GET['name'] == 'hitler') {
		//add here
		$my_array['children'] = array(
			array('name' => 'Child1', 'photo' => 'cat_pages/hitler_children/child1.png'),
			array('name' => 'Child2', 'photo' => 'cat_pages/hitler_children/child2.png'),
			array('name' => 'Child3', 'photo' => 'cat_pages/hitler_children/child3.png'),
		);
	}
	
	if ($_GET['name'] == 'ginger') {
		$my_array['photos'] = array(
			array('title' => 'New Year', 'photo' => 'cat_pages/gingers_photos/newyear.png', 'likes' => 1230, 'dislikes' => 30),
			array('title' => 'party christams 2021', 'photo' => 'cat_pages/gingers_photos/christmass_party.png', 'likes' => 200, 'dislikes' => 20),
			array('title' => 'birthday', 'photo' => 'cat_pages/gingers_photos/birthday_party.png', 'likes' => 456, 'dislikes' => 100),
		);
	}

	include "cat_pages/" . $_GET['name'] . ".php";
} else { 
	#include "cat_pages/menu.php";
	menu();
}
?>
</body>
</html>