<?php
$pageTitle = 'Cats of Cyprus';
include_once 'template/header.php';
?>
<?php include_once 'template/menu.php'; ?>
<h2 style="color:#66ffcc;text-align:center;padding-top:20px">This is home page</h2>
<?php
$cats = getFavouriteCats($cats);
include_once 'template/cat_list.php';
?>
<?php include_once 'template/footer.php'; ?>