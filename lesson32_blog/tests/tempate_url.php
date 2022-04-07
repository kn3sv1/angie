<?php


$urlTemplate = 'http://google.com/?post_id=%post_id%&roma=%var2%';

//example how to overwrite many times in variable
$url = str_replace('%post_id%', 10, $urlTemplate);
$url = str_replace('%var2%', 20, $url);

echo  '<pre>';
print_r($url);

