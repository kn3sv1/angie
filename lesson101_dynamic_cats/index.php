<?php

include_once 'function.php';

// It is front controller. It is the main page that controls which file to include
// https://webdevetc.com/blog/the-front-controller-design-pattern-in-php/

if (isset($_GET['page'])) {
    $page = $_GET['page'];
}
else {
    $page = 'home';
}
//switch is like many ifs
switch($page) {
    case "home":
        // http://html5.local/angie/lesson101_dynamic_cats/index.php?page=home
        include("template/home.php");
        break;
    case "paphos":
        // http://html5.local/angie/lesson101_dynamic_cats/index.php?page=paphos
        include("template/paphos.php");
        break;
    case "larnaka":
        // http://html5.local/angie/lesson101_dynamic_cats/index.php?page=larnaka
        include("template/larnaka.php");
        break;
    case "limassol":
        // http://html5.local/angie/lesson101_dynamic_cats/index.php?page=limassol
        include("template/limassol.php");
        break;
    case "detail":
        // http://html5.local/angie/lesson101_dynamic_cats/index.php?page=detail
        include("template/detail.php");
        break;
    case "admin":
        // http://html5.local/angie/lesson101_dynamic_cats/index.php?page=admin
        include("template/admin.php");
        break;
    default:
        // http://html5.local/angie/lesson101_dynamic_cats/index.php?page=home2
        include("template/404.php");
}