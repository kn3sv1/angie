<?php
include 'function.php';

//we validate that user provided all information. and our code handled this situation
// http://html5.local/angie/lesson27_free_hosting/fruit_detail.php
if (empty($_GET['fruit'])) {
    die('<span style="color:red">YOU DIDNT PROVIDE FRUIT NAME</span>');
}
$fruit_name = $_GET['fruit'];
$fruit = [];
foreach ($fruits as $current_fruit) {
    if ($current_fruit['name'] == $fruit_name) {
        $fruit = $current_fruit;
    }
}

// we validate that user provided the correct information. and our code handled successfully
// http://html5.local/angie/lesson27_free_hosting/fruit_detail.php?fruit=cherries000000000000
if (empty($fruit)) {
    die('<span style="color:red">YOU ENTERED WRONG VALUE</span>');
}

//$fruit = ['width' => 260, 'src' => 'photos/kiwis.png', 'name' => 'kiwis', 'description' => 'kiwis description'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>fruit detail page</title>
</head>
<body style="background-color:<?php echo getBackgroundColor(); ?>;">
<?php echo getHello(); ?><br />
<img width="<?php echo $fruit['width'] ?>"  src="<?php echo $fruit['src'] ?>" /><br />
<p>Name of fruit: <span style="color:red"><?php echo $fruit['name'] ?></span></p>
<p>Description: <span style="color:deeppink"><?php echo $fruit['description'] ?></span></p>

<p>

    <a href="index.php">Go back to fruits page</a>

</p>
<?php
    include 'comments1.php';
?>
</body>
</html>
