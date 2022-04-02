<?php
include_once 'function.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Blog</title>
    <style type="text/css">
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background-color: #D0DCE2;
        }
        .header {
            background: url(css/my-background.jpg) no-repeat scroll top;
            background-size: cover;
            height: 480px;
            margin-bottom: 20px;
        }
        .h-info {
            margin: 0 auto;
            text-align: center;
            padding-top: 200px;
            font-weight: 700;
            text-transform: uppercase;
            font-size: 45px;
            color: white;
        }
        .footer {
            background-color: #000;
            min-height: 100px;
        }
        .content {
            margin: 0 auto;
            width: 900px;
            background-color: #66ffcc;
        }
        a:hover {
            text-decoration: none;
         }
        .menu {
            float: right;
        }
        .menu a {
            display: inline-block;
            padding: 5px;
            margin: 0 5px;
            background-color: #8a82fa;
        }
        .menu a:last-child {
            margin-right: 0;
        }
        .f-menu {
            padding: 20px 0;
            display: flex;
            justify-content: center;
        }
        .f-menu a {
            display: inline-block;
            padding: 5px;
            margin: 0 5px;
            background-color: #8a82fa;
        }
        .clearfix {
            clear: both;
        }
        .body {
            padding-top: 20px;
        }
        .body-main {
            float: left;
            width: 70%;
            min-height: 400px;
        }
        .m-block {
            margin: 10px 5px;
            background-color: #F0F0F0;
        }
        .body-sidebar {
            float: left;
            width: 30%;
        }
        .s-block {
            margin: 10px 5px;
            background-color: #a5a5a5;
        }
        .post-prev-next .p-prev {
            display: inline-block;
            width: 50%;
            background-color: #8a82fa;
            float: left;
        }
        .post-prev-next .p-next {
            display: inline-block;
            width: 50%;
            background-color: #539def;
            text-align: right;
            float: right;
        }
        .related .related-block {
            float: left;
            width: 33%;
        }
        .related .related-block .rb-date {
            color: #a5a5a5;
            font-size: 12px;
        }
        .related .related-block .rb-info {
            color: #a5a5a5;
            font-size: 12px;
        }
    </style>
</head>
<body>
<div class="header">
    <div class="h-info">Angie's Blog</div>
</div>
<div class="content">
    <?php include "templates/top-menu.php"; ?>
    <div class="clearfix"></div>
    <div class="body">
        <?php include "templates/main-body.php"; ?>
        <?php include "templates/body-sidebar.php"; ?>
        <div class="clearfix"></div>
    </div>
    <div class="footer">
        <?php include "templates/footer-menu.php"; ?>
    </div>
</div>
</body>
</html>