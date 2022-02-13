<?php

include_once "../function.php";
$colors = getColors();


foreach ($colors as $id => $color) {
    echo '<p><a style="font-weight: bold;color:' . $color['name'] . '" href="color_edit.php?id=' . $id . '">' . $color['name'] .  '</a></p>';
}
?>
<br /><br />
<a style="color:red;font-size: 22px" href="color_create.php">ADD COLOR</a>
<br /><br />
<a style="color:green;font-size: 22px" href="../">GO TO MAIN PAGE</a>
<br /><br /><br /><br />