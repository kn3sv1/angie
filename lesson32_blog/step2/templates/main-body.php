<?php

//User clicks on any link in the menu bar on top

// http://html5.local/angie/lesson32_blog/step2/
if (empty($_GET['page'])) {
    return include 'pages/home.php';
}
//center of page - main-body.php very dinamic. It always changes depending on what page you are
//we dont want to include in one file 1 million combination of if.
//code should be simple. So in "pages"
//  - posts.php responsible only for list of posts
//  - post-detail.php responsible only for specific post 1
//  - about-me.php responsible only for about me
//  - book-orders.php responsible only for orders of books page


// http://html5.local/angie/lesson32_blog/step2/?page=posts

// http://html5.local/angie/lesson32_blog/step2/?page=post-detail&id=1

// http://html5.local/angie/lesson32_blog/step2/?page=about-me
switch ($_GET['page']) {
    case 'posts':
        include 'pages/posts.php';
        break;
    case 'post-detail':
        include 'pages/post-detail.php';
        break;
    case 'about-me':
        include 'pages/about-me.php';
        break;
    case 'book-orders':
        include 'pages/book-orders.php';
        break;
    case 'podcasts':
        include 'pages/podcasts.php';
        break;
    case 'contact':
        include 'pages/contact.php';
}