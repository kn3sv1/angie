<?php

$a = 1;
$b = 2;
$c = 0;

print_r($c);
add($a, $b, $c);
echo "<br />Outside c = ", $c;

// $c is not copied it is original address in memory and we can change that value
function add($a, $b, &$c) {
    $c = $a + $b;
    echo "<br />inside function c = $c <br />";
}
