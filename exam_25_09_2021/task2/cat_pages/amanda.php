<h2>Amanda's personal page</h2>
<img src="cat_pages/images2/amanda.png" alt="Trulli" width="500" height="333">
<br /><br />
<?php 
if (!empty($my_array['description'])) {
	echo "<p style='color:red;font-size:24px'>" . $my_array['description'] . "</p>"; 
}
?>



<?php if (!empty($my_array)) { ?>
<h2>Amanda hobbies</h2>
<?php echo '<pre>'; print_r($my_array); ?>
<style type="text/css">
table, td {
	border: 1px solid;
}
</style>
<table>
  <tr>
    <th>Hobby</th>
  </tr>
<?php for($i = 0; $i < count($my_array['hobbies']); $i++) { ?>
  <tr>
    <td><?php echo $my_array['hobbies'][$i]; ?></td>
  </tr>
<?php } ?>  
</table>
<?php } ?>
<?php
include "cat_pages/menu.php";

?>