<?php

$pageTitle = 'Favourite cats of Larnaka';
include_once 'template/header.php';
include_once 'template/menu.php';

$cats = getFavCatsCity($cats, 'Larnaka');
include_once 'template/cat_list.php';

include_once 'template/footer.php';

