<?php
session_start();


if (!empty($_GET['login']) && !empty($_GET['password'])) {

    // http://html5.local/angie/lesson38_session/facebook/index.php?login=angelina&password=1234
    if ($_GET['login'] === 'angelina' && $_GET['password'] === '1234') {
        $_SESSION['user'] = 'Angie Neopthotou';
        $_SESSION['age'] = 20;
    }
    // http://html5.local/angie/lesson38_session/facebook/index.php?login=roma&password=1111
    if ($_GET['login'] === 'roma' && $_GET['password'] === '1111') {
        $_SESSION['user'] = 'Roman Satanovskyi';
        $_SESSION['age'] = 36;
    }
}

if (!empty($_SESSION['user'])) {
    echo 'Hello ' . $_SESSION['user'] . ' your age is ' . $_SESSION['age'];
} else {
    echo 'WRONG PASSWORD! please try again';
}