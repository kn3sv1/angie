<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title><?php page_title(); ?> | <?php site_name(); ?></title>
    <link href="<?php site_url(); ?>/<?php echo config('template_path') ; ?>/style.css" rel="stylesheet" type="text/css" />
</head>
<body style="background-color: lightblue">
<div class="wrap" style="background-color: white">
    <h2>Welcome to our website</h2>
    <header>
        <h1><?php site_name(); ?></h1>
        <div class="login">
            <?php login_form(); ?>
        </div>
        <nav class="menu">
            <?php nav_menu(); ?>
        </nav>
    </header>

    <article>
        <h2><?php page_title(); ?></h2>
        <?php page_content(); ?>
    </article>

    <footer>
        <small>&copy;<?php echo date('Y'); ?> <?php site_name(); ?>.<br><?php site_version(); ?></small>
    </footer>

</div>
</body>
</html>