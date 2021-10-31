<?php

$target_dir = "uploads/";
$files = scandir($target_dir);


echo '<pre>';
print_r($files);

foreach ($files as $file) {
	if ($file == "." || $file == "..") {
		continue;
	}
	$full_path = $target_dir . $file;
	echo "<img src=\"$full_path\" /><br />";
}