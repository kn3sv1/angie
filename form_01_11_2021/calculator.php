<!DOCTYPE html>
<html>
	<head>
		<title>Calculator</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
		<style type="text/css">
			.error {
				color:red;
				font-weight:bold;
			}
			.plus {
				color:blue;
				font-weight:bold;
			}
			.minus {
				color:green;
				font-weight:bold;	
			}
			.times {
				color:orange;
				font-weight:bold;	
			}
			.divided_by {
				color:red;
				font-weight:bold;	
			}					
		</style>
	</head>
	<body>
		
		<div class="container" style="margin-top: 50px"> 
		
			<?php
			
			//echo '<pre>';
			//print_r($_POST);
			
				// If the submit button has been pressed
				if(isset($_POST['submit']))
				{
					// Check number values
					if(is_numeric($_POST['number1']) && is_numeric($_POST['number2']))
					{
						$total_class = 'error';
						// Calculate total
						if($_POST['operation'] == 'plus')
						{
							$total = $_POST['number1'] + $_POST['number2'];
							$total_class = 'plus';
						}
						if($_POST['operation'] == 'minus')
						{
							$total = $_POST['number1'] - $_POST['number2'];
							$total_class = 'minus';
						}
						if($_POST['operation'] == 'times')
						{
							$total = $_POST['number1'] * $_POST['number2'];
							$total_class = 'times';
						}
						if($_POST['operation'] == 'divided by')
						{
							$total = $_POST['number1'] / $_POST['number2'];
							$total_class = 'divided_by';
						}
						
						//we don't use {$variable_name}
						//echo $_POST['number1'];
						
						//we USE {$variable_name} because PHP does not understand where is variable and where is TEXT
						//echo "{$_POST['number1']}";
						
						//backslash is used to add double quotes inside double quotes 
						//$demo = "text \" text2 ";
						//$demo2 = 'text \' text2 ';
						
						// Print total to the browser. Variable insede single quotes doesnt work
						echo "<h1>{$_POST['number1']} {$_POST['operation']} {$_POST['number2']} equals <span class=\"{$total_class}\">{$total}</span></h1>";
					
					} elseif($_POST['operation'] == 'plus' && !empty($_POST['number1']) && !empty($_POST['number2'])) {
							// step 3: join 2 
							$total_string = $_POST['number1']  . ' ' .  $_POST['number2'];	
							echo "<h1><span style='color:green'>{$_POST['number1']}</span> {$_POST['operation']} <span style='color:green'>{$_POST['number2']}</span> equals <span style='color:green'>{$total_string}</span></h1>";
					} else {	
						// Print error message to the browser
						echo '<span class="error">Numeric values are required</span>';
					}
				}
			
			?>
		    
		    <!-- Calculator form -->
		    <form method="post" action="calculator.php">
		        <input name="number1" value="<?php echo !empty($_POST['number1']) ? $_POST['number1'] : ''; ?>" type="text" class="form-control" style="width: 150px; display: inline" />
		        <select name="operation">
		        	<option value="plus" <?php echo !empty($_POST['operation']) && $_POST['operation'] == 'plus' ? 'selected="selected"' : '';  ?>>Plus</option>
		            <option value="minus" <?php echo !empty($_POST['operation']) && $_POST['operation'] == 'minus' ? 'selected="selected"' : '';  ?>>Minus</option>
		            <option value="times" <?php echo !empty($_POST['operation']) && $_POST['operation'] == 'times' ? 'selected="selected"' : '';  ?>>Times</option>
		            <option value="divided by" <?php echo !empty($_POST['operation']) && $_POST['operation'] == 'divided by' ? 'selected="selected"' : '';  ?>>Divided By</option>
		        </select>
		        <input name="number2" value="<?php echo !empty($_POST['number2']) ? $_POST['number2'] : ''; ?>" type="text" class="form-control" style="width: 150px; display: inline" />
		        <input name="submit" type="submit" value="Calculate" class="btn btn-primary" />
		    </form>
	    
		</div>
	
	</body>
</html>