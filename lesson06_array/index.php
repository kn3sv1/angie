<?php

$students = array("Angie", "George", "Roma", "Katerina", "Andreas");

for ($i = 0; $i <count($students); $i = $i +1) {
	//<p style="color:red;">I am red</p>
	echo '<p style="color:red;">' . $students[$i] . '</p>';
}