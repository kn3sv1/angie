<?php

$guests = array("Katerina" => 20, "Roman"=> 40, "Angie"=> 30, "Tamila"=> 10);

foreach ($guests as $name => $euro) {
	if ( $euro >= 25) {
		echo "{$name} spend {$euro} euro - A LOT of money <br />";
	} else {
		echo "{$name} spend {$euro} euro - <span style='color:red'>BAD CUSTOMER</span> <br />";
	}
} 