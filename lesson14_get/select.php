<?php
	$cars = [
		"audi2" => "Audi2",
		"mersedes" => "Mersedes",
		"bmw" => "BMW",
		"toyota" => "Toyota VITZ 2015",
	];

?>  
<form action="select.php" method="get">
  <select id="cars" name="cars">
    <option value="volvo">Volvo</option>
    <option value="saab">Saab</option>
    <option value="fiat">Fiat</option>
    <option value="audi">Audi</option>
	<?php
		//echo '<option value="audi2">Audi2</option>';
		//echo '<option value="mersedes">Mersedes</option>';
	$gender_selected = isset($_GET['cars']) ? $_GET['cars'] : '';
	foreach ($cars as $x => $val) {
		if ($gender_selected == $x) {
			$checked = 'selected="selected"';
		} else {
			$checked = '';
		}
		
		echo '<option ' . $checked . ' value="' . $x . '">'. $val .'</option>' . "\n";
    }		
	?>
  </select>
<br /><br />
  
  
<?php
	$genders = [
		"male2" => "Male2",
		"female2" => "Female2",
		"other2" => "Other2",
		"children2" => "Children2",
		"children3" => "Children3",
	];

?>  

  <input type="radio" id="male" name="gender" value="male">
  <label for="male">Male</label><br>
  
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label><br>
  
  <input type="radio" id="other" name="gender" value="other">
  <label for="other">Other</label><br>
  
  <input type="radio" id="children" name="gender" value="children">
  <label for="children">Children</label><br>
  <?php
	$gender_selected = isset($_GET['gender']) ? $_GET['gender'] : '';
	foreach ($genders as $key => $val2) {
		//$checked = $gender_selected == $key ? 'checked' : '';
		if ($gender_selected == $key) {
			$checked = 'checked';
		} else {
			$checked = '';
		}
		
		
		//echo '<input type="radio" id="' . $key . '"
		echo "\n";
		echo '  <input type="radio" id="' . $key . '" name="gender" value="' . $key . '"  ' . $checked . ' >'. "\n";
		echo '  <label for="' . $key . '">'. $val2 .'</label><br>' . "\n";
	}	
?>
<br><br>
 <input type="submit">
</form>
