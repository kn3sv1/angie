<h2>Tedaki's personal page</h2>
<img src="cat_pages/images2/tedaki.png" alt="Trulli" width="500" height="333">
<br /><br />
<style type="text/css">
table, td {
	border: 1px solid;
}
td {
	padding: 10px;
}

.header_friends {
	color:blue;
}
.row-1 {
	background:#bdbd44;
}
.Hitler {
	background:red;
}
</style>
<h2 class="header_friends">Tedaki's friends</h2>
<table>
  <tr>
    <th>Name</th>
	<th>Photo</th>
	<th>Link</th>
  </tr>
  
<?php for($i = 0; $i < count($my_array['friends']); $i++) {
		$cssClass = '';
		if ($my_array['friends'][$i]['name'] == 'Hitler') {
			$cssClass= 'Hitler';
		}

	?> 
  <tr class="<?php echo $cssClass; ?>" >
    <td><?php echo $my_array['friends'][$i]['name']; ?></td>
	<td><img src="<?php echo $my_array['friends'][$i]['photo']; ?>"  width="100" ></td>
	<td><a href="<?php echo $my_array['friends'][$i]['href']; ?>"><?php echo $my_array['friends'][$i]['name']; ?></a></td>
  </tr>
<?php } ?>  
</table>