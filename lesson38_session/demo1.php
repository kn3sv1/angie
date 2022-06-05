<?php
session_start();
session_regenerate_id();

//print_r($_GET);


// https://www.w3schools.com/php/php_sessions.asp

// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Session variables are set.";

echo session_save_path();