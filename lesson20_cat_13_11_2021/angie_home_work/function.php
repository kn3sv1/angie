<!DOCTYPE html>
<html>
<body>

<?php
function writeMsg($errors2) {
	echo "<p>we are inside function</p>";
	print_r($errors2);
}



$errors = array('name'=>"hello");
writeMsg($errors);
writeMsg($errors);
$errors5 = array('name0000'=>"111111111111111");
writeMsg($errors5);

/*
//not productive WAY:
$errors = array('name'=>"hello");
echo "<p>we are inside function</p>";
print_r($errors);
echo "<p>we are inside function</p>";
print_r($errors);
$errors5 = array('name0000'=>"111111111111111");
echo "<p>we are inside function</p>";
print_r($errors5);
*/
?>

</body>
</html>