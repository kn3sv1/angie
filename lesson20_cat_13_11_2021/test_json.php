<?php

$file = 'test_json.txt';
$comments = [ "comment 1", 'comment 2', 'comment3'];

unset($comments[1]);

$comments = array_values($comments);
$str = json_encode($comments,  JSON_PRETTY_PRINT);
file_put_contents($file, $str);

for ($i = 0; $i < count($comments); $i++) {
	echo $comments[$i], "<br />";
}