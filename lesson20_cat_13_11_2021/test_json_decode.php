<?php

$file = 'test_json.txt';
$comments = [ "comment 1", 'comment 2', 'comment3'];

//unset($comments[1]);

$my_string_assoc = '
{
    "my_key": "comment 1",
    "my_key2": "comment3"
}
';


$my_string_numerical = '
[
    "comment 1",
    "comment3"
]
';


print_r(json_decode($my_string_numerical, true));
