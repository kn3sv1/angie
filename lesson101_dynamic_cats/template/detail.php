<?php
if (empty($_GET['name'])) {
    die('name URL param is required');
}
$name = $_GET['name'];

$pageTitle = 'Cat ' . $name;
include_once 'template/header.php';

include_once 'template/menu.php';

$cat = findCatByName($cats, $name);
if ($cat === null) {
    die('cat\'s name not found!');
}
include_once 'template/cat_detail.php';

include_once 'template/footer.php';
