<?php

$comments_file = "comments1.txt";
$comments = array();
if (file_exists($comments_file)) {
    //we use only once to get array!!!!!!!!!!!!!!!!!!!
	$json = file_get_contents($comments_file);
    $comments = json_decode($json,true);
}	



if (!empty($_POST['new_comment'])) {
	$comments[] = $_POST['new_comment'];
}

if (!empty($_POST['update_comment']) && isset($_POST['comment_id'])) {
	//print_r($_POST);
	$index = $_POST['comment_id'];
	$new_value = $_POST['update_comment'];
	
	$comments[$index] = $new_value;
}




$json = json_encode($comments, JSON_PRETTY_PRINT);
file_put_contents($comments_file, $json);

?>

<h2>ADD YOUR COMMENT BELLOW</h2>
<style>
.comment {
	border-bottom:1px solid  black;
}
</style>
<?php echo 'ALL COMMENTS (DEBUG INFO):'; print_r($comments); ?>


<?php	for($i = 0; $i < count($comments); $i++) { ?>
		<div class="comment">
		<?php echo 'index:', $i; ?>
		<form action="" method="post">
			<textarea name="update_comment" rows="4" cols="50"><?php echo $comments[$i]; ?></textarea>
			<input type="hidden" name="comment_id" value="<?php echo $i; ?>">
			<input type="submit" value="Update Comment">
		</form>
		</div>
<?php } ?>	
Add NEW COMMENT:<br />
<form action="" method="post">
<textarea name="new_comment" rows="4" cols="50"></textarea>
<input type="submit" value="ADD Comment">
<br><br>
