<?php

include_once "../function.php";
$cities = getCities();


foreach ($cities as $id => $city) {
    echo '<p><a style="font-weight: bold;color:' . $city['city'] . '" href="city_edit.php?id=' . $id . '">' . $city['city'] .  '</a></p>';
}
?>
<br /><br />
<a style="color:red;font-size: 22px" href="city_create.php">ADD CITIES</a>
<br /><br />
<a style="color:green;font-size: 22px" href="../">GO TO MAIN PAGE</a>
<br /><br />
<a style="color:purple;font-size: 22px" href="city">CITIES PAGE</a>
<br /><br /><br /><br />