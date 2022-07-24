<?php

$pageTitle = 'Favourite cats of Paphos';
include_once 'template/header.php';
include_once 'template/menu.php';

$cats = getFavCatsCity($cats, 'Paphos');
include_once 'template/cat_list.php';

include_once 'template/footer.php';
