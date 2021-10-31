<h2>Hitler's personal page</h2>
<img src="cat_pages/images2/hitler.png" alt="Trulli" width="500" height="333">
<br /><br />


<style type="text/css">
table, td {
	border: 1px solid;
}
</style>
<table>
  <tr>
    <th>Name</th>
	<th>Photo</th>
  </tr>
  <tr>
    <td>Child1</td>
	<td><img src="cat_pages/hitler_children/child1.png"  width="100" ></td>
  </tr>
  <tr>
    <td>Child2</td>
	<td><img src="cat_pages/hitler_children/child2.png"  width="100" ></td>
  </tr>
  <tr>
    <td>Child3</td>
	<td><img src="cat_pages/hitler_children/child3.png"  width="100" ></td>
  </tr>
</table>

<br /><br /><br /><br />

<table>
  <tr>
    <th>Name</th>
	<th>Photo</th>
  </tr>
  
<?php for($i = 0; $i < count($my_array['children']); $i++) { ?> 
  <tr>
    <td><?php echo $my_array['children'][$i]['name']; ?></td>
	<td><img src="<?php echo $my_array['children'][$i]['photo']; ?>"  width="100" ></td>
  </tr>
<?php } ?>  
</table>



<br /><br /><br /><br />
<?php
include "cat_pages/menu.php";

?>
