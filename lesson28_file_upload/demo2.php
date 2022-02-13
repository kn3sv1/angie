<?php

//https://limassol-events.000webhostapp.com/demo_upload/

//https://www.tutorialspoint.com/php/php_file_uploading.htm

if(isset($_FILES['image'])){
    $errors= array();
    $file_name = $_FILES['image']['name'];
    $file_size =$_FILES['image']['size'];
    $file_tmp =$_FILES['image']['tmp_name'];
    $file_type=$_FILES['image']['type'];
    //explode = make from string array
    $arr = explode('.',$_FILES['image']['name']);
    $file_ext=strtolower(end($arr));

    $expensions= array("jpeg","jpg","png");

    if(in_array($file_ext,$expensions)=== false){
        $errors[]="extension not allowed, please choose a JPEG or PNG file.";
    }

    if($file_size > 2097152){ // 2 *1024 * 1024
        $errors[]='File size must be excately 2 MB';
    }

    if(empty($errors)==true){
        move_uploaded_file($file_tmp,"photos/".$file_name);
        echo "Success";
    }else{
        print_r($errors);
    }
}
?>
<html>
<body>

<form action="" method="POST" enctype="multipart/form-data">
    <input type="file" name="image" />
    <input type="submit"/>
</form>

</body>
</html>