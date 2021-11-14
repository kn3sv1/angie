<?php

/**
 * Website navigation.
 */
function nav_menu($sep = ' | ')
{

    $site_url = 'http://html5.local/angie/simple_web_site_06_11_2021/test/menu.php';
    $nav_items = [
        '' => 'Home222',
        'about-us' => 'About Us',
        'products' => 'Products',
        'contact' => 'Contact',
    ];

    $nav_menu = [];
    foreach ($nav_items as $uri => $name) {
        $subject = $_SERVER['QUERY_STRING'];
        $query_string = str_replace('page=', '', $subject);
        $class = $query_string == $uri ? ' active' : '';

        $param = ($uri == '') ? '' : '?page=';
        $url = $site_url  . $param . $uri;

        // Add nav item to list. See the dot in front of equal sign (.=)
        $nav_menu[] = '<a href="' . $url . '" title="' . $name . '" class="item ' . $class . '">' . $name . '</a>' . "\n";
    }


    //long way
    $menu_string = implode($sep, $nav_menu);
    $menu_string_trim = trim($menu_string, $sep);
    echo $menu_string_trim;

    //short way
    //echo trim(implode($sep, $nav_menu), $sep);
}
?>
<style type="text/css">
    nav .active {
        border-bottom: 1px solid;
        background-color: green;
    }
</style>
<nav class="menu">
    <?php nav_menu(); ?>
</nav>