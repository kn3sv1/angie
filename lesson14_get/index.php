<?php

// http://html5.local/angie/lesson14_get/?test=12&s=56&arr[0]=12&arr[1]=66&&arr[test]=ass 

echo '<pre>';

print_r($_GET);

//short way
$color = isset($_GET['color']) ? $_GET['color'] : '#66ffcc';//if exist $color in browser that we will write: show color else red
$my_password = isset($_GET['my_password']) ? $_GET['my_password'] : ' ';


if ($my_password != 147892) {
	$my_password = "wrong password!";	
}	



if (isset($_GET['my_car'])) {
	$car = $_GET['my_car'];
} else {
	$car = 'empty!';
}


//long way
/*
if (isset($_GET['color'])) {
	$color = $_GET['color'];
} else {
	$color = 'red';
}
*/

if (isset($_GET['name'])) {
	$name = $_GET['name'];
} else {
	$name = 'empty!';
}	


$number1 = isset($_GET['my_number1']) ? $_GET['my_number1'] : 0;
$number2 = isset($_GET['my_number2']) ? $_GET['my_number2'] : 0;
$operation = isset($_GET['my_operation']) ? $_GET['my_operation'] : 'empty!';


$answer = '';
//$number3 = 9999990;
if ($operation == "add") {
	$answer = $number1 + $number2;
} 
if ($operation == "minus") {
    $answer = $number1 - $number2;
	print_r(111111111);
	print_r($answer);
}	

if ($operation == "multiply") {
	$answer = $number1 * $number2;
}

if ($operation == "divide") {
	$answer = $number1 / $number2;
}

//$answer = isset($_GET['my_answer']) ? $_GET['my_answer'] : 0;
	

?>
<body style="background-color:<?php echo $color  ?>">

<form action="index.php" method="get">
	COLOR: <input type="text" name="color" value="<?php echo $color; ?>"><br>
	Name: <input type="text" name="name" value="<?php echo $name; ?>"><br>
	Login: <input type="text" name="my_login"><br>
	
	Password: <input type="text" name="my_password" value="<?php echo $my_password; ?>"><br>
	Car: <input type="text" name="my_car" value="<?php echo $car; ?>"><br>
	
	Numner1: <input type="text" name="my_number1" value="<?php echo $number1; ?>"><br>
	Numner2: <input type="text" name="my_number2" value="<?php echo $number2; ?>"><br>
	Operation: <input type="text" name="my_operation" value="<?php echo $operation; ?>"><br>
	
	Answer: <input type="text" name="my_answer" value="<?php echo $answer; ?>"><br>
	<input type="submit">
</form>


</body>