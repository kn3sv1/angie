<?php

include 'students.php';

$id = $_GET['idbbbbbbbbbbbb'];

//6 => array("name" => "Tamila", "age" => 60, "full_name" => "Tamila Satanovky", "photo" => 'Tamila.png', "favorite_color" => "red", "hobbies" => array("walking", "dancing")),
$student = $students[$id];

//print_r($student);
?>
<!DOCTYPE html>
<html>
<p>

<h2>Student Detail</h2>
<p>Name: <?php echo $student['name'] ?></p>
<p>Age: <?php echo $student['age'] ?></p>
<p>Full name: <?php echo $student['full_name'] ?></p>
<img  src="photos/<?php echo $student['photo']; ?>" />
<p>
    <?php echo $student['favorite_color']; ?>
    <div style="width:20px;height:20px;background-color:<?php echo $student['favorite_color']; ?>"></div>
</p>
<p>Hobbies<br />
<?php
for ($a = 0; $a < count($student['hobbies']); $a = $a + 1) {
    echo $student['hobbies'][$a];
    echo ",<br />";
}
?>
</p>
</body>
</html>


