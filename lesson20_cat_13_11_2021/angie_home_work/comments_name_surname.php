<?php

function print_error($errors_argument, $key) {
    echo !empty($errors_argument[$key]) ? '<span style="color:red">' . $errors_argument[$key] . '</span>' : '';
}

function validateField($errors, $key) {
	if (empty($_POST[$key])) {
		$errors[$key] = 'Value is empty. Please provide value!';
	} elseif(strlen($_POST[$key]) < 3) {
		$errors[$key] = 'Value is less than 3.';
	}
	//return back MAYBE modified ARRAY - with errors
	return $errors;
}
//when we asign variable to "comments_name_surname.txt" we just put the name of file in that variable not the content!

$comments_file = "comments_name_surname.txt";
$comments = array();
if (file_exists($comments_file)) {
    //we use only once to get array!!!!!!!!!!!!!!!!!!!
	$json = file_get_contents($comments_file);
	$comments = json_decode($json,true);
}

/*
$comments = array('comment1', 'comment2', 'comment3');

associative array inside of numeric
$comments = array(
	array('comment' => 'comment1', 'name' => 'name1'),
	array('comment' => 'comment2', 'name' => 'name2'),
	array('comment' => 'comment3', 'name' => 'name3'),
);

*/


//add validation 

$errors = array();
//we submitted something
if (!empty($_POST)) {
	//print_r($_POST);
	//lets check field for add comment form
	if (!empty($_POST['operation']) && $_POST['operation'] == 'add') {	
		/*
		if (empty($_POST['name'])) {
            $errors['name'] = 'Value is empty. Please provide value!';
        } elseif(strlen($_POST['name']) < 3) {
            $errors['name'] = 'Value is less than 3.';
        }
		if (empty($_POST['surname'])) {
			$errors['surname'] = 'Value is empty. Please provide value!';
		} elseif(strlen($_POST['surname']) < 3) {
			$errors['name'] = 'Value is less than 3.';
		}
		*/
		//return BACK array with maybe NEW errors
		$errors = validateField($errors, 'name');
		$errors = validateField($errors, 'surname');
		
		
		//OLD WAY - no productive!!!
		if (empty($_POST['new_comment'])) {
			$errors['new_comment'] = 'Value is empty. Please provide value!';
		} elseif(strlen($_POST['new_comment']) < 3) {
			$errors['new_comment'] = 'Value is less than 3.';
		}
		
	}

	if (!empty($_POST['operation']) && $_POST['operation'] == 'update') {
		$errors = validateField($errors, 'update_name');
		$errors = validateField($errors, 'update_surname');
		$errors = validateField($errors, 'update_comment');
	}
}


//if (!empty($_POST['new_comment']) && !empty($_POST['name']) && !empty($_POST['surname'])) { 
if (!empty($_POST['operation']) && $_POST['operation'] == 'add' && empty($errors))  {
	$name = $_POST['name'];
	$surname = $_POST['surname'];
	$comment = $_POST['new_comment'];
	
	$comments[] = array('comment' => $comment, 'name' => $name, 'surname' => $surname);
}

//if (!empty($_POST['update_comment']) && !empty($_POST['update_name']) && !empty($_POST['update_surname']) && isset($_POST['comment_id'])) {
if (!empty($_POST['operation']) && $_POST['operation'] == 'update' && empty($errors))  {
	//print_r($_POST);
	$index = $_POST['comment_id'];
	$comment = $_POST['update_comment'];
	$name = $_POST['update_name'];
	$surname = $_POST['update_surname'];
	
	$comments[$index] = array('comment' => $comment, 'name' => $name, 'surname' => $surname);
}



//file_put_content() means if the file does not exist it creates one also writes data to a file.
$json = json_encode($comments, JSON_PRETTY_PRINT);
file_put_contents($comments_file, $json);

?>

<h2>ADD YOUR COMMENT BELLOW</h2>
<style>
.comment {
	border-bottom:1px solid  black;
}
</style>
<?php echo 'ALL COMMENTS (DEBUG INFO):'; echo '<pre>'; print_r($comments); ?>


<?php	for($i = 0; $i < count($comments); $i++) {
	
		// if isCommentPosted == true call print_error(...) otherwise return '';
		//$isCommentPosted ? print_error($errors, 'update_surname') : '';
	
		// $_POST['comment_id'] == $i - with this we will find exactly which comment we update.
		$isCommentPosted = false;
		if (!empty($_POST['operation']) && $_POST['operation'] == 'update' && isset($_POST['comment_id']) && $_POST['comment_id'] == $i) {
			$isCommentPosted = true;
		}
		

	?>
		<div class="comment">
		<?php echo 'index:', $i; ?>
		<form action="" method="post">
			<input type="hidden" name="operation" value="update">
			Name:<input type="text" name="update_name" value="<?php echo $comments[$i]['name']; ?>">
			<?php if ($isCommentPosted) { 
					print_error($errors, 'update_name'); 
					}
					?>
			<br><br>
			Surname:<input type="text" name="update_surname" value="<?php echo $comments[$i]['surname']; ?>">
			<?php $isCommentPosted ? print_error($errors, 'update_surname') : ''; ?>
			<br><br>
			Comment: <textarea name="update_comment" rows="4" cols="50"><?php echo $comments[$i]['comment']; ?></textarea>
			<?php $isCommentPosted ? print_error($errors, 'update_comment') : ''; ?>
			<input type="hidden" name="comment_id" value="<?php echo $i; ?>">
			<input type="submit" value="Update Comment">
		</form>
		</div>
<?php } ?>	



Add NEW COMMENT:<br />
<form action="" method="post">
<input type="hidden" name="operation" value="add">
Name:<input type="text" name="name" value="">
<?php echo !empty($errors['name']) ? '<span style="color:red">' . $errors['name'] . '</span>' : '' ?>
<br><br>
Surname:<input type="text" name="surname" value="">
<?php print_error($errors, 'surname'); ?>
<br><br>
Comment: <textarea name="new_comment" rows="4" cols="50"></textarea>
<?php print_error($errors, 'new_comment'); ?>
<input type="submit" value="ADD Comment">
<br><br>
