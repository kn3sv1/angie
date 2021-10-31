<?php

$name = 'angie_forgot_set_name__' . date('Y-m-d_h_i_s') . '.png';
if (!empty($_POST['file_name'])) {
	$name = $_POST['file_name']  . '.png';
}

$source_file = $_FILES["fileToUpload"]["tmp_name"];
$target_file = "uploads/" . $name;

//source file is address where server stored file
echo "<p>File soource will be: $source_file</p>";
echo "<p>File destination will be: $target_file</p>";

if (move_uploaded_file($source_file, $target_file)) {
	echo "The file <span style='color:green;font-weight:bold'>". $name. "</span> has been uploaded.";
} else {
	echo "Sorry, there was an error uploading your file. You didn't select file MALAKA!";
}


/*
//ARRAY in ARRAY
<!DOCTYPE html>
<html>
<body>

<?php
$age = array(
  "Peter"=>"35", 
  "Ben"=>"37", 
  "Joe"=>"43", 
  "pic" => array("name" => 9999999, "size" => 55555, "temp_name" => 3333)
);
echo "Peter is " . $age['Peter'] . " years old.";


echo  $age['pic']["name"] ;
echo  $age['pic']["size"] ;
?>

</body>
</html>

https://www.youtube.com/watch?v=aTPkwBq-62k&t=22s




*/