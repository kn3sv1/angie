<?php

$target_dir = "uploads/";
$files = scandir($target_dir);


//print_r($files);

foreach ($files as $file) {
	if ($file == "." || $file == "..") {
		continue;
	}
	echo "<img src=\"{$target_dir}{$file}\" /><br />";
}