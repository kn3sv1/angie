<?php

$pageTitle = 'Favourite cats of Limassol';
include_once 'template/header.php';
include_once 'template/menu.php';

$cats = getFavCatsCity($cats, 'Limassol');
include_once 'template/cat_list.php';

include_once 'template/footer.php';
