<?php
$pageTitle = 'Cats of Limassol';
include_once 'template/header.php';

include_once 'template/menu.php';

$cats = getCatsByCity($cats, 'Limassol');
include_once 'template/cat_list.php';

include_once 'fav_cats_city/limassol.php';

include_once 'template/footer.php';
