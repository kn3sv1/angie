<?php
$numbers = array(50, 5, 10, 3, 10, 6, 20, 10, 9, 30);
$max = null;
$maxIndex = null;

//all this code just sets 2 variables: max and maxindex
for ($i = 0; $i < count($numbers); $i++) {
	//skip numbers bigger than 15
	if ($numbers[$i] > 15) {
		continue;
	}
	//if we didnt set first number less than 15 set null
	if ($max == null) {
		$max = $numbers[$i];
		$maxIndex = $i;
	} elseif($max < $numbers[$i]) { //if its not null but digit compare with current array number 
		$max = $numbers[$i];
		$maxIndex = $i;
	}		
}

echo "max = $max maxIndex = $maxIndex";

?>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
<table>
  <tr>
    <th>numbers</th>
  </tr>
  <?php for ($i = 0; $i < count($numbers); $i++) {

	//key is always unique so it selects only one the first 10
	if ($maxIndex == $i) {
		$style = ' style="background-color:red" ';
	} else {
		$style = '';
	}

	//here we select value not key so it will select all 10
    /*
	if ($max == $numbers[$i]) {
		$style = ' style="background-color:red" ';
	} else {
		$style = '';
	}
    */
  ?>
  <tr>
    <td<?php echo $style; ?>><?php echo $numbers[$i]; ?></td>
  </tr>
  <?php } ?>
</table>