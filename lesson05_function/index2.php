<?php
/*
function goodmornig($name) {
	echo "goodmorning $name ! We wish you a happy day and good luck!  </br>";		
}
echo "<br/><br/>";


goodmornig("Angie");
goodmornig("Roma");
goodmornig("Katerina");
*/

/*
echo "goodmorning Angie ! We wish you a happy day! </br>";	
echo "goodmorning Roma ! We wish you a happy day! </br>"; 	
echo "goodmorning Katerina1 ! We wish you a happy day! </br>";	
echo "goodmorning Katerina2 ! We wish you a happy day! </br>";	
echo "goodmorning Katerina3 ! We wish you a happy day! </br>";	
echo "goodmorning Katerina4 ! We wish you a happy day! </br>";	
echo "goodmorning Katerina5 ! We wish you a happy day! </br>";	
echo "goodmorning Katerina6 ! We wish you a happy day! </br>";	
echo "goodmorning Katerina7 ! We wish you a happy day! </br>";	
echo "goodmorning Katerina8 ! We wish you a happy day! </br>";	
echo "goodmorning Katerina9 ! We wish you a happy day! </br>";	
echo "goodmorning Katerina10 ! We wish you a happy day! </br>";	
echo "goodmorning Katerina11 ! We wish you a happy day! </br>";	
echo "goodmorning Katerina12 ! We wish you a happy day! </br>";	
echo "goodmorning Katerina13 ! We wish you a happy day! </br>";	
echo "goodmorning Katerina14 ! We wish you a happy day! </br>";	
echo "goodmorning Katerina15 ! We wish you a happy day! </br>";	
echo "goodmorning Katerina16 ! We wish you a happy day! </br>";	

*/

function goodmornigAll($people) {
	for ($i = 0; $i <count($people); $i = $i +1) {
	echo "goodmorning {$people[$i]} ! We wish you a happy day and good luck!  </br>";	
	}
}


function goodmornig($name) {
	echo "goodmorning $name ! We wish you a happy day and good luck!  </br>";		
}


$people = array("Katerina", "Angie", "Roma");
for ($i = 0; $i <count($people); $i = $i +1) {
	goodmornig($people[$i]); 
	//echo $people[$i];
}

//goodmornig("George"); 

echo "<br />--------1111111111--------------<br />";

goodmornigAll(array("Katerina", "Angie", "Roma"));
goodmornigAll(array("George"));




$clinic = array(
	"accounting" => array("Jana", "Angie", "Machi"),
	"doctors" => array("Pantazis", "Haris"),
	"cleaners" => array("Maria", "Georgia"),
);
echo "<br />---------CLINIC-------------<br />";
foreach($clinic as $departmentKey => $namesValue) {
	echo "<br /> Good morning department: $departmentKey</br />";
	goodmornigAll($namesValue);
}

echo "<br />---------CLINIC (ROMA version)-------------<br />";
foreach($clinic as $departmentKey => $namesValue) {
	echo "<br /> Good morning department: $departmentKey</br />";
	for ($i = 0; $i <count($namesValue); $i = $i +1) {
		goodmornig($namesValue[$i]);
	}
}