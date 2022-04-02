<?php


//<div class="f-menu">
//    <a href="#">footer-link1</a>
//    <a href="#">footer-link2</a>
//    <a href="#">footer-link3</a>
//    <a href="#">footer-link4</a>
//</div>

$footer = getFooterMenuArray();

echo '<div class="f-menu">';
foreach ($footer as $link) {
    echo '<a href="' . $link['href'] . '">' . $link['text'] . '</a>';
}
echo '</div>';