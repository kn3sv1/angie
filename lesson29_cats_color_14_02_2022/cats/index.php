<?php

include_once "../function.php";
$cats = getCats();
$colors = getColors();

foreach ($cats as $id => $cat) {
    $color_id = $cat['color_id'];
    $color = $colors[$color_id];
    echo '<p style="color:green"><a style="color: ' . $color['name'] . ';font-weight:bold" href="cat_edit.php?id=' . $id . '">' . $cat['name'] .  '</a></p>';
}
?>
<br /><br />
<a style="color:red;font-size: 22px" href="cat_create.php">ADD CAT</a>
<br /><br />
<a style="color:green;font-size: 22px" href="../">GO TO MAIN PAGE</a>
<br /><br /><br /><br />