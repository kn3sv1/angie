<?php
$pageTitle = 'Cats of Larnaka';

include_once 'template/header.php';

include_once 'template/menu.php';

$cats = getCatsByCity($cats, 'Larnaka');
include_once 'template/cat_list.php';

include_once 'fav_cats_city/larnaka.php';

include_once 'template/footer.php';