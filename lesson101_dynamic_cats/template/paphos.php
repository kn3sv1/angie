<?php
$pageTitle = 'Cats of Paphos';
include_once 'template/header.php';

include_once 'template/menu.php';

$cats = getCatsByCity($cats, 'Paphos');
include_once 'template/cat_list.php';

include_once 'fav_cats_city/paphos.php';

include_once 'template/footer.php';