<?php

//https://www.youtube.com/watch?v=wLoPGWwMamc

$dir = "movies_images";

$files = scandir($dir);

function pre($array) {
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

pre($files);

$files = array_diff($files, array('..', '.'));

pre($files);

$files = array_values($files);

$movies = array();
for ($i = 0; $i < count($files); $i++) {
   $movies_name = basename($files[$i], ".png");
   $movies_name = str_replace("_", " ", $movies_name);
   $movies_name = ucwords($movies_name);
   $movies[$movies_name] = $files[$i];
}

echo pre($movies);
