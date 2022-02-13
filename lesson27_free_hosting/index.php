<?php
include 'function.php';

// https://limassol-events.000webhostapp.com/fruitmarket/
// https://files.000webhost.com/

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
    //echo sprintf('<a href="fruit_detail.php?fruit=%s"><img width="%s" src="%s" /></a><br />'. PHP_EOL, $fruit['name'], $fruit['width'], $fruit['src']);
    echo  '<a href="fruit_detail.php?fruit=' . $fruit['name'] . '"><img width="' . $fruit['width'] . '" src="' . $fruit['src'] . '" /></a><br />'. PHP_EOL;
}
?>
<p>

    <a href="create_fruit.php">ADD NEW FRUIT</a>

</p>
<?php
include 'comments1.php';
?>
</body>
</html>