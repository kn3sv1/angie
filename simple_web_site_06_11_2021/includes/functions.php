<?php

/**
 * Displays site name.
 */
function site_name()
{
    echo config('name');
}

/**
 * Displays site url provided in config.
 */
function site_url()
{
    echo config('site_url');
}

/**
 * Displays site version.
 */
function site_version()
{
    echo config('version');
}

function login_form()
{
    $path = getcwd() . '/' . config('content_path') . '/login_form.php';
    include_once $path;

//  Both will work - code above and bellow, just the above code is more professional and good practice for programmers to
//  assign the full current working directory to include the desired file.

//      $path = config('content_path') . '/login_form.php';
//      include_once $path;
}

/**
 * Website navigation.
 */
function nav_menu($sep = ' | ')
{

    //$_SERVER['QUERY_STRING'] = "page=about-us" AFTER ?

    $nav_menu = [];
    $nav_items = config('nav_menu');

    foreach ($nav_items as $uri => $name) {
        //$query_string = 'about-us'
        //$query_string = str_replace('page=', '', $_SERVER['QUERY_STRING'] ?? '');
        $query_string = str_replace('page=', '', $_SERVER['QUERY_STRING']);
        $class = $query_string == $uri ? ' active' : '';
        //$q = config('pretty_uri') || $uri == '' ? '' : '?page=';
        $q = $uri == '' ? '' : '?page=';
        $url = config('site_url') . '/' . $q . $uri;

        // Add nav item to list. See the dot in front of equal sign (.=)
        $final_link = '<a href="' . $url . '" title="' . $name . '" class="item ' . $class . '">' . $name . '</a>' ;
        $nav_menu[] = $final_link;
        // $nav_menu .= 'world' MEANS: $nav_menu = $nav_menu . 'world'
    }

    echo implode($sep, $nav_menu);
}

/**
 * Displays page title. It takes the data from
 * URL, it replaces the hyphens with spaces and
 * it capitalizes the words.
 */
function page_title()
{
    echo isset($_GET['page']) ? $_GET['page'] : 'Home';

    //$page = isset($_GET['page']) ? htmlspecialchars($_GET['page']) : 'Home';
    //echo ucwords(str_replace('-', ' ', $page));
}

/**
 * Displays page content. It takes the data from
 * the static pages inside the pages/ directory.
 * When not found, display the 404 error page.
 */
function page_content()
{
    $page = isset($_GET['page']) ? $_GET['page'] : 'home';
    $path = getcwd() . '/' . config('content_path') . '/' . $page . '.php';

    if (! file_exists($path)) {
        $path = getcwd() . '/' . config('content_path') . '/404.php';
    }
    //it will not work if file extension of files are .php because it only gets the content
    //of a file in text it doesnt execute any code that's why we use include_once

    //echo file_get_contents($path);
    include_once $path;
}

/**
 * Starts everything and displays the template.
 */
function init()
{
    include config('template_path') . '/template.php';
}

/**
 * here i read from file and convert json to array
 * @return array|mixed
 */
function getInfo() {
    $file = "data/sign_in.json";
    $info = array();
    if (file_exists($file)) {
        //we use only once to get array!!!!!!!!!!!!!!!!!!!
        $json = file_get_contents($file);
        $info = json_decode($json,true);
    }

    return $info;
}

/**
 * here i convert array to string and save in file
 * @param array $fruits
 */
function saveInfo(array  $sign_in) {
    $file = "data/sign_in.json";
    $json = json_encode($sign_in, JSON_PRETTY_PRINT);
    file_put_contents($file, $json);
}

function validation($errors, $key) {
    if (empty($_POST[$key])) {
        $errors[$key] = '*Required field';
    } elseif (strlen($_POST[$key]) < 3) {
        $errors[$key] = 'Characters need to be more than 3';
    }

    return $errors;
}

function printErrors($errors, $key) {
    if (!empty($errors[$key])) {
        echo '<span style="color:red">' . $errors[$key] .'</span>';
    }
}