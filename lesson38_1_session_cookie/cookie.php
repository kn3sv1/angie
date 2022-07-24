<!DOCTYPE html>
<?php

// https://www.w3schools.com/php/func_network_setcookie.asp

// 1 hour = 60 minutes * 60 seconds = 3600 seconds
// 24 * (60*60) = 86400 seconds = 1 day

$cookie_name = "user";
$cookie_value = "Angie";

// time() = current time in seconds
// http://html5.local/angie/lesson38_1_session_cookie/cookie.php?set_my_cookie=1

//if we loggedIn we can set SESSION
if (!empty($_GET['set_my_cookie'])) {
    if(!isset($_COOKIE[$cookie_name])) {
        setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 30 days to remember
    }


    //Set-Cookie: PHPSESSID=tbhfo3uige5i02r5tkpordcpll; path=/
    session_start(); //create cookie - tbhfo3uige5i02r5tkpordcpll - name of ID or filename


    //E:\xampp\tmp\sess_tbhfo3uige5i02r5tkpordcpll
    $_SESSION['my_key'] = 'Angie Neophytou';
}
?>
<html>
<body>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
    echo "Cookie '" . $cookie_name . "' is set!<br>";
    echo "Value is: " . $_COOKIE[$cookie_name];
}
?>

</body>
</html>