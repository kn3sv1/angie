<?php

$cats = [
    ["name" => "Tedaki", "color" => "#8217DC", "photo" => "photos_of_cats/tedaki.png"],
    ["name" => "Lucky", "color" => "orange", "photo" => "photos_of_cats/lucky.png"],
    ["name" => "Ginger", "color" => "#4CFF33", "photo" => "photos_of_cats/ginger.png"],
    ["name" => "Kiara", "color" => "#3390FF", "photo" => "photos_of_cats/kiara.png"],
    ["name" => "Hitler", "color" => "#FF5733", "photo" => "photos_of_cats/hitler.png"],
];

// say browser that are sending a json format, not html or text
header("Content-type: application/json; charset=utf-8");

// just to test we say in code page not found(404)
//http_response_code(404);

//
echo json_encode($cats);
