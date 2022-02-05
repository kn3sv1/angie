<?php
    include 'function.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>my fruits</title>
</head>
<body style="background-color:<?php echo getBackgroundColor(); ?>;">
<?php echo getHello(); ?><br />
<?php
foreach ($fruits as $fruit) {
    echo sprintf('<a href="fruit_detail.php?fruit=%s"><img width="%s" src="%s" /></a><br />'. PHP_EOL, $fruit['name'], $fruit['width'], $fruit['src']);
    //echo  '<img width="' . $photo['width'] . '" src="' . $photo['src'] . '" /><br />'. PHP_EOL;
}

include 'comments1.php';
?>
</body>
</html>