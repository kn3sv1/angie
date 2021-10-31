<?php
/*
$a = 1;
$b = 2;
$c = 0;
$c = $c + 10;
echo $c;
*/

$numbers = array(7,3,2);
$total = 0;
for ($i = 0; $i < count($numbers); $i++) {
    $angie = $numbers[$i];
    $total =  $total + $angie;
}
echo "<br />Total: $total";