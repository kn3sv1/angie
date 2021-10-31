<?php

// http://html5.local/angie/lesson09_basic/calculator.php/?number1=10&number2=20


$number1 = $_GET['number1'];
$number2 = $_GET['number2'];

//echo $number1 + $number2;
$result = $number1 + $number2;

echo $number1 . "+" . $number2 . "=" . $result;

echo "<br /><br />";
$operation = $_GET['operation'];

if ($operation == "add") {
	$result = $number1 + $number2;
echo $number1 . "+" . $number2 . "=" . $result;
	
} elseif ($operation == "minus") {
	$result = $number2 - $number1;
	echo "<span style='color:red;'>" . $number2 . "</span>" 

. "-" . $number1 . " = <span style='color:red;'>" . $result . "</span>";	
}	

?>
<br />
<br />
<span style='color:red;'><?php echo $number2; ?></span>
<?php echo $operation; ?>
 <span style='color:blue;'><?php echo $number1; ?></span>
 = <span style='color:red;'><?php echo $result; ?></span>