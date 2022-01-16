<h2>All comment:</h2>
<style>
table.comments {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

table.comments td,
table.comments th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

table.comments tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<?php
	//read from file all comments
	/*
	$comments = array(
		'My lovely Angie. it is your LOVELY FATHER & Anita. We love you :)',
		'It is Katerinaki. we love you angie :)',
		'Roma only for passport!',
	);
	*/
	//if $fileforcat exists rewrite $file to $fileforcat. Otherwise stay the same like in home page 
	//we need this to redirect to original page of cat without any additional get variables in address bar.
	$currentPage = !empty($_GET['name']) ?
			'/angie/lesson20_cat_13_11_2021/site_test.php?name=' . $_GET['name']
			: '/angie/lesson20_cat_13_11_2021/cats_table.php';
	$comment = null;
	$file = "all_comments.txt";
	if (isset($fileForCat)) {
		$file = $fileForCat;
	}
	$comments = array();	
	if (file_exists($file)) {
		//step 1: read from file in variable
		$my_text = file_get_contents($file);
		//step 2: convert string back to array comments wit json_decode()
		$comments = json_decode($my_text, true);
	}
	//we create variable as flag to cheque if we are now on EDIT page not on page when we add comment because
    //different code should work for different job. false means we on add page.
	$isEditPage = isset($_GET['operation'])  && $_GET['operation'] == 'edit' && isset($_GET['comment_id']);
	if ($isEditPage) {
		$key = $_GET['comment_id'];
		$comment = $comments[$key];
	}

	//this block of if is for deleting comments
	if (isset($_POST['comment_id'])) {
		$comment_id = $_POST['comment_id'];
		echo "<p style='color:red'>DELETING COMMENT # {$comment_id}</p>";
		//print_r($comments, $comment_id);
		unset($comments[$comment_id]);
		
		//reset indexes, otherwise it will be assoc=ciative array and not NUMERICAL. WE NEED NUMERICAl for FOR operator below
		//we use this bellow when we delete like above index in our numerical array.
		$comments = array_values($comments);
		
		
		//WRITE to file
		$my_string = json_encode($comments,  JSON_PRETTY_PRINT);
		file_put_contents($file, $my_string);
	}
	//this is used to add comment
	//this code only works when you add comment, if you dont add this code doesnt work
	if (!empty($_POST['comment'])) {
		if ($_POST['operation'] == 'edit' && isset($_GET['comment_id'])) {
			$key = $_GET['comment_id'];
			$comments[$key] = $_POST['comment'];
		} else {
			$comments[] = $_POST['comment'];
		}
		//save to file all comments.
		//step 10: convert array comments to json string
		$my_string = json_encode($comments,  JSON_PRETTY_PRINT);
		//step 11: write my string to file
		//if the file to save comments doesnt exist we create one eg. all_comments.txt 
		file_put_contents($file, $my_string);
		
		//after post submit we should redirect browser to the same page but with get request. Java script language. Now we will not have pop up to resubmit form when you refresh page.
		echo '<script type="text/javascript"> location.href = "' . $currentPage . '";</script>';
	}
?>
<table class="comments">
  <tr>
	<th>Comment</th>
  </tr>
<?php  for ($i = 0; $i < count($comments); $i++) { ?>
  <tr>  
	<td>
		<?php echo $comments[$i]; ?>
		<form method="get" action="">
			<input type="hidden" name="operation" value="edit">
			<?php if (!empty($_GET['name'])) { ?>
				<input type="hidden" name="name" value="<?php echo $_GET['name']; ?>">
			<?php } ?>
			<input type="hidden" name="comment_id" value="<?php echo $i; ?>">
			<input type="submit" value="Edit Comment">
		</form>
		<br />
		<form method="post" action="">
			<input type="hidden" name="operation" value="delete">
			<input type="hidden" name="comment_id" value="<?php echo $i; ?>">
			<input type="submit" value="DELETE Comment (OPERATION=delete)">
		</form>
	</td>  
  </tr>	
<?php  }  ?>
</table>
<h2 style="color:green">Please support our cats and add comment:</h2>
<form method="post" action="">
	<textarea name="comment" rows="4" cols="50"><?php echo $comment; ?></textarea>
	<br><br>
	<?php if($isEditPage) { ?>
		<input type="hidden" name="operation" value="edit">	
		<input type="submit" value="UPDATE Comment (OPERATION=EDIT)">
		&nbsp;&nbsp;&nbsp;<a href="<?php echo $currentPage; ?>" >Cancel</a>
	<?php } else { ?>
		<input type="hidden" name="operation" value="add">	
		<input type="submit" value="ADD Comment (OPERATION=ADD)">
	<?php } ?>
</form>