<?php

//<div class="menu">
//    <a href="#">link1</a>
//    <a href="#">link2</a>
//    <a href="#">link3</a>
//    <a href="#">link4</a>
//</div>

$menu = getTopMenuArray();

//echo '<pre>';
//print_r($menu);

echo  '<div class="menu">';
foreach ($menu as $item) {
    echo '<a href="' . $item['href'] . '">' . $item['text'] . '</a>';
}

echo  '</div>';