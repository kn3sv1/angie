<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Simple PHP Website222',
        'site_url' => 'http://html5.local/angie/simple_web_site_06_11_2021',
        'pretty_uri' => false,
        'nav_menu' => [
            '' => 'Home222',
            'about-us' => 'About Us',
            'products' => 'Products',
            'contact' => 'Contact',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v3.1 ANGIE',
    ];

    //http://html5.local/angie/simple_web_site_06_11_2021/?template=template_v2
    //http://html5.local/angie/simple_web_site_06_11_2021/?template=template
//    if ($key == 'template_path' && isset($_GET['template'])) {
//        return $_GET['template'];
//    }

//    $temp = isset($config[$key]) ? $config[$key] : null;
//    return $temp;

    return isset($config[$key]) ? $config[$key] : null;
}
