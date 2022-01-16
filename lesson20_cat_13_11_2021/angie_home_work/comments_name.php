<?php

$comments_file = "comments_name.txt";
$comments = array();
if (file_exists($comments_file)) {
    //we use only once to get array!!!!!!!!!!!!!!!!!!!
	$json = file_get_contents($comments_file);
	$comments = json_decode($json,true);
}

/*
$comments = array('comment1', 'comment2', 'comment3');


$comments = array(
	array('comment' => 'comment1', 'name' => 'name1'),
	array('comment' => 'comment2', 'name' => 'name2'),
	array('comment' => 'comment3', 'name' => 'name3'),
);

*/

if (!empty($_POST['new_comment']) && !empty($_POST['name'])) { 
	$name = $_POST['name'];
	$comment = $_POST['new_comment'];
	
	$comments[] = array('comment' => $comment, 'name' => $name);
}

if (!empty($_POST['update_comment']) && !empty($_POST['update_name']) && isset($_POST['comment_id'])) {
	//print_r($_POST);
	$index = $_POST['comment_id'];
	$comment = $_POST['update_comment'];
	$name = $_POST['update_name'];
	
	$comments[$index] = array('comment' => $comment, 'name' => $name);
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
			Name:<input type="text" name="update_name" value="<?php echo $comments[$i]['name']; ?>"><br><br>
			Comment: <textarea name="update_comment" rows="4" cols="50"><?php echo $comments[$i]['comment']; ?></textarea>
			<input type="hidden" name="comment_id" value="<?php echo $i; ?>">
			<input type="submit" value="Update Comment">
		</form>
		</div>
<?php } ?>	



Add NEW COMMENT:<br />
<form action="" method="post">
Name:<input type="text" name="name" value=""><br><br>
Comment: <textarea name="new_comment" rows="4" cols="50"></textarea>
<input type="submit" value="ADD Comment">
<br><br>
