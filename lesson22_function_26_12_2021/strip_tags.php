<?php

//$message = "<div> This is my bio </div>";
$message = "This is my bio";

//trim = Strip whitespace (or other characters) from the beginning and end of a string
$no_tag =  trim(strip_tags($message)); // "This is my bio"


if ($message == $no_tag) {
    echo '<p>The text is EQUAL</p>';
} else {
    echo '<p>The text is DIFFERENT</p>';
}

//we can use this function to check if somebody tries to insert html in the comment section