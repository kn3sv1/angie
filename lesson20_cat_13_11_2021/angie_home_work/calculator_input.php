<?php

function echoerrors($errors_argument, $key) {
    echo !empty($errors_argument[$key]) ? '<span style="color:red">' . $errors_argument[$key] . '</span>' : '';
}

function validation($errors, $key) {
	if (isset($_GET[$key]) && $_GET[$key] == '') {
		$errors[$key] = 'Empty field. Provide your value.';
	} elseif (isset($_GET[$key]) && !is_numeric($_GET[$key])) {
		$errors[$key] = 'Please provide a NUMERIC.';
	} elseif (isset($_GET[$key]) && $_GET[$key] > 100) {
		$errors[$key] = 'Please provide a number less than 100.';
	}
	
	return $errors;
}	



$calculator_file = "calculator.txt";
$history = array();
if (file_exists($calculator_file)) {
    $json = file_get_contents($calculator_file);
	$history = json_decode($json,true);
}


$operation_array = array ('add' => '+', 'minus' => '-', 'multiply' => '*');
$result = null;
$number1 = null;
$number2 = null;

$errors = array();
if (!empty($_GET)) {
	//print_r($_GET);
	$errors = validation($errors, 'number1');
	$errors = validation($errors, 'number2');
}


//we put isset not !empty because php sees 0 as empty value!
if (empty($errors) && isset($_GET['number1']) && isset($_GET['number2']) && !empty($_GET['operation'])) {
	
	$number1 = $_GET['number1'];
	$number2 = $_GET['number2'];
	
	if ($_GET['operation'] == 'add') {
		$result = $number1 + $number2;
	}	
	if ($_GET['operation'] == 'minus') {
		$result = $number1 - $number2;
	}	
	if ($_GET['operation'] == 'multiply') {
		$result = $number1 * $number2;
	}	
	
	$history[] = array(
		'number1' => $number1,
		'number2' => $number2,
		'operation' => $_GET['operation'],
		'result' => $result,
		'date' => date('Y-m-d H:i:s'),
	);
}

	



$json = json_encode($history, JSON_PRETTY_PRINT);
file_put_contents($calculator_file, $json);




?>
<form action=" " method="get">

<input type="text" name="number1" value="<?php echo $number1; ?>">
<?php echoerrors($errors, 'number1'); ?>

	<label for="operation_id">Choose an operation:</label>
	<select id="operation_id" name="operation">
		<option value="">All</option>
		<?php foreach($operation_array as $key => $value) {
				$selected = (!empty($_GET['operation']) && $_GET['operation'] == $key) ? 'selected' : '';			
			?>
			<option <?php echo $selected; ?> value="<?php echo $key; ?>"><?php echo $value; ?></option>			
		<?php } ?>	
	</select>
	
<input type="text" name="number2" value="<?php echo $number2; ?>">
<?php echoerrors($errors, 'number2'); ?>
<p>result is <strong style="color:green"><?php echo $result; ?></strong></p>

<input type="submit" value="submit">
</form>	

<?php 

echo 'History of calculation bellow:';
echo '<pre>'; print_r(array_reverse($history));


	
	
