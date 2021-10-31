<?php
$limassol = array("teddy", "bob", "clara", "george");
$paphos = array("teddy", "alisa", "john", "george");
$larnaka = array("teddy", "alisa3", "john3", "george");

$common = array();

for($i = 0; $i < count($limassol); $i++) {
	for($j = 0; $j < count($paphos); $j++) {
		for($k = 0; $k < count($larnaka); $k++) {
			if ($limassol[$i] == $paphos[$j] &&  $limassol[$i] == $larnaka[$k]) {
				$common[] = $paphos[$j];
			}
		}
	}
}
echo '<pre>';
print_r($common);

/*------------------*/