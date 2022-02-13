<?php
//if I create a txt file then I should put something valid there example []. I dont need to create a file
//the function file_get_contents() will automatically create one.
$file = "text.txt";
$comments = array();
if (file_exists($file)) {
    $text = file_get_contents($file);
    $comments = json_decode($text, true);
}

if (!empty($_POST['name']) && !empty($_POST['text'])) {
    $comments[] = ["name" => $_POST['name'], "comment" => $_POST['text']];
}

if (!empty($_POST['update_text']) && !empty($_POST['update']) && isset($_POST['id'])) {
    $index = $_POST['id'];
    $comments[$index] = ["name" => $_POST['update'], "comment" => $_POST['update_text']];
}

$string = json_encode($comments, JSON_PRETTY_PRINT);
file_put_contents($file, $string);

//var_dump($comments);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>my comment page</title>
</head>
<body>
<h2>ADD YOUR COMMENT BELLOW</h2>

<?php  for($i = 0; $i < count($comments); $i++)  { ?>
        <form action="" method="post">
            <!-- html comment: form we submit (input elements) so this $i bellow will not affect array with index $i
            from for loop which we count array $comments
             -->
            <p>Comment number: <?php echo $i; ?></p>
            <input type="hidden" name="id" value="<?php echo  $i; ?>">
            NAME: <input type="text" name="update" value="<?php echo $comments[$i]["name"]; ?>"><br>
            TEXT: <textarea name="update_text" rows="4" cols="50"><?php echo $comments[$i]["comment"]; ?></textarea>
            <input type="submit" value="UPDATE COMMENT">
        </form>
<?php } ?>
<form action ="" method="post">
    NAME: <input type="text" name="name" value=""><br>
    TEXT: <textarea name="text" rows="4" cols="50"></textarea>
    <input type="submit" value="SUBMIT">

</form>
</body>

</html>


