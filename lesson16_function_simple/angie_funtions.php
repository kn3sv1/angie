<?php

function add2($number1, $number2) {
	return $number1 + $number2;
}

function minus($number3, $number4) {
	return $number3 - $number4;
}	

function sum_array($numbers) {
	//print_r($numbers);
	$total = 0;
	for ($i = 0; $i < count($numbers); $i++) {
		$total = $total + $numbers[$i];		
	}
	return $total;	
}	

function sum_array_bigger($numbers, $bigger) {
	//print_r($numbers);
	$total = 0;
	for ($i = 0; $i < count($numbers); $i++) {
		if ($numbers[$i] > $bigger) {
			$total = $total + $numbers[$i];
		}
	}
	return $total;	
}

function find_max_in_array($numbers3) {
	$max = 0;
	for ($i = 0; $i < count($numbers3); $i++) {
		if ($numbers3[$i] > $max) {
			$max = $numbers3[$i];		
		}
	}	
	return $max;	
}		

function find_max_in_array_bigger($numbers4, $bigger7) {
	$max = 0;
	for ($i = 0; $i < count($numbers4); $i++) {
		if ($numbers4[$i] > $bigger7) {
			$max = $max + $numbers4[$i];
		}
	}
	return $max;	
}

function replace_in_array($names) {
	for ($i = 0; $i < count($names); $i++) {
		if ($names[$i]  == "Katerina") {
			$names[$i] = "Skato";
		}
		if ($names[$i]  == "Angie") {
			$names[$i] = "Sklavi";
		}
		if ($names[$i]  == "Jana") {
			$names[$i] = "Malaka";
		}
	}
	return $names;	
}

function replace_in_array_to($numbers5, $min_number) {
	for ($i = 0; $i < count($numbers5); $i++) {
		if ($numbers5[$i] < $min_number) {
			$numbers5[$i] = $min_number;
		}
	}
	return $numbers5;	
}

function salary_plus_bonus_pantazis($numbers6, $bonus) {
	for ($i = 0; $i < count($numbers6); $i++) {
		 $numbers6[$i] = $numbers6[$i] + ($numbers6[$i] * $bonus / 100);
	}
	return $numbers6;	
}

function myFunction($name) {
	echo "Welcome $name! Have a nice day.<br>";
}	