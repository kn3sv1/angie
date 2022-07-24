<?php

// https://www.geeksforgeeks.org/http-headers-content-type/

//by default
//header('Content-Type: text/html; charset=UTF-8');

header('Content-type: image/png');
echo file_get_contents('photos/dog.png');