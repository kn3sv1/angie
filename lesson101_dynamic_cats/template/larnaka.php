<?php
$pageTitle = 'Cat of Larnaka';
include_once 'template/header.php';
?>
<?php include_once 'template/menu.php'; ?>
<?php
$cats = getCatsByCity($cats, 'Larnaka');
include_once 'template/cat_list.php';
?>
<?php include_once 'template/footer.php'; ?>