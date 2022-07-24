<?php
// program to work with files
// php -f roma.php less

$folder = isset($argv[1]) ? $argv[1]: 'lesson';
//print_r($folder);


$files = scandir('./');

//print_r($files);

foreach($files as $file) {
	$pos = strpos($file, $folder);
	if ($pos === false || $pos !== 0) {
		continue;
	}
	echo "$file \n";
}