<?php

$cookie_name = 'city';
// from current date -30 days to get new date
setcookie($cookie_name, '', time() + (-86400 * 30), "/");
?>