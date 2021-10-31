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

.Amanda111111111111111 {
	background:blue;
}

.Ginge {
	background:orange;
}
</style>
<h2 class="header_friends">Tedaki's friends</h2>
<table>
  <tr style="background:green">
    <th>Number</th>
    <th>Name</th>
	<th style="background:red">Photo</th>
	<th>Link</th>
  </tr>
  
<?php for($i = 0; $i < count($my_array['friends']); $i++) {
	//$cssClass = str_replace(" ","_",$my_array['friends'][$i]['name']);
	
	//we replace space with nothing (empty) because classes dont work with spaces!
	$cssClass = str_replace(" ","",$my_array['friends'][$i]['name']);
/*
		$cssClass = '';
		if ($my_array['friends'][$i]['name'] == 'Hitler') {
			$cssClass= 'Hitler';
		}
*/
	$width = 100;
	if ($my_array['friends'][$i]['name'] == 'Hitler') {
		$width = 200;
	} elseif ($my_array['friends'][$i]['name'] == 'Ginge') {
		$width = 300;
	}		
	?> 
  <tr class="<?php echo $cssClass; ?>" >
    <td><?php echo $i+1; ?></td>
    <td><?php echo $my_array['friends'][$i]['name']; ?></td>
	<td><img src="<?php echo $my_array['friends'][$i]['photo']; ?>"  width="<?php echo $width; ?>" ></td>
	<td><a href="<?php echo $my_array['friends'][$i]['href']; ?>"><?php echo $my_array['friends'][$i]['name']; ?></a></td>
  </tr>
<?php } ?>  
</table>