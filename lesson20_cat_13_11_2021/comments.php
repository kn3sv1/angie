<h2>All comment:</h2>
<?php
	//read from file all comments
	/*
	$comments = array(
		'My lovely Angie. it is your LOVELY FATHER & Anita. We love you :)',
		'It is Katerinaki. we love you angie :)',
		'Roma only for passport!',
	);
	*/
	
	$comments = array();
	//step 1: read from file in variable
	
	$my_text = file_get_contents("all_comments.txt");
	//step 2: convert string back to array comments wit json_decode()
	$comments = json_decode($my_text, true);
	
	//this code only works when you add comment, if you dont add this code doesnt work
	if (!empty($_POST['comment'])) {
		$comments[] = $_POST['comment'];
		//save to file all comments.
		//step 10: convert array comments to json string
		$my_string = json_encode($comments,  JSON_PRETTY_PRINT);
		//step 11: write my string to file
		//if the file to save comments doesnt exist we create one eg. all_comments.txt 
		file_put_contents("all_comments.txt", $my_string);
		
		//after post submit we should redirect browser to the same page but with get request. Java script language. Now we will not have pop up to resubmit form when you refresh page.
		echo '<script type="text/javascript"> location.href = location.href;</script>';
	}
?>
<table>
  <tr>
	<th>Comment</th>
  </tr>
<?php  for ($i = 0; $i < count($comments); $i++) { ?>
  <tr>  
	<td><?php echo $comments[$i]; ?></td>  
  </tr>	
<?php  }  ?>
</table>
<h2 style="color:green">Please support our cats and add comment:</h2>
<form method="post" action="">
	<textarea name="comment" rows="4" cols="50"></textarea>
	<br><br>
	<input type="submit" value="Add Comment">
</form>