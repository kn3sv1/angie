<?php

/**
 * Website navigation.
 */
function nav_menu($sep = ' | ')
{
    $nav_items = [
        '' => 'Home222',
        'about-us' => 'About Us',
        'products' => 'Products',
        '?contact' => 'Contact',
    ];
    foreach ($nav_items as $uri => $name) {
        $param = ($uri == '') ? '' : '?page=';
        //$param =  '?page=';
        var_dump($param . $uri);
    }
}

nav_menu();