<?php

/**
 * Used to store website configuration information.
 *
 * @var string or null
 */
function config($key = '')
{
    $config = [
        'name' => 'Simple Website',
        'site_url' => 'http://html5.local/angie/simple_web_site_06_11_2021',
        'pretty_uri' => false,
        'nav_menu' => [
            '' => 'Home',
            'About-us' => 'About Us',
            'Products' => 'Products',
            'Contact' => 'Contact',
            'Contact2' => 'Contact',
            'Registration' => 'Registration',
            'logout' => 'Log Out',
        ],
        'template_path' => 'template',
        'content_path' => 'content',
        'version' => 'v2.1 ANGIE',
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
