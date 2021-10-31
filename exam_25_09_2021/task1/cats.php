<!DOCTYPE html>
<html>
<head>
<?php echo '<link rel="stylesheet" href="cat_pages/my_cats.css">'; ?>
</head>
<body>
<?php

if (!empty($_GET['name'])) {
	if ($_GET['name'] == 'tedaki') {
		include "cat_pages/styles.html";
	}
	include "cat_pages/" . $_GET['name'] . ".html";
} else { 
	include "cat_pages/menu.html";
}
?>
</body>
</html>