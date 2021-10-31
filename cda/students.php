<!--
<h1>Students CDA 2020:</h1>
<a href="details.php?name=Angie">Angie</a><br />
<a href="details.php?name=Roman">Roman</a><br />
<a href="details.php?name=Katerina">Katerina</a><br />
<a href="details.php?name=George">George</a><br />
<a href="details.php?name=Vazo">Vazo</a><br />
<a href="details.php?name=Elena">Elena</a><br />
-->

<h1>Students CDA 2020:</h1>

<?php
set_time_limit(60*5);

$students = array(
	0 => array("name" => "Angie", "age" => 36, "full_name" => "Angie Neophytou", "mark" => 'A'),
	1 => array("name" => "Roman", "age" => 35, "full_name" => "Roman Satanovky", "mark" => 'E'),
	2 => array("name" => "Katerina", "age" => 60, "full_name" => "Katerina Demitridou", "mark" => 'F'),
	3 => array("name" => "George", "age" => 35, "full_name" => "George Neophytou", "mark" => 'C'),
	4 => array("name" => "Vaso", "age" => 35, "full_name" => "Vaso love", "mark" => 'C'),
	5 => array("name" => "Elena", "age" => 35, "full_name" => "Elena kristpdoulou", "mark" => 'B'),
	6 => array("name" => "Tamila", "age" => 60, "full_name" => "Tamila Satanovky", "mark" => 'C'),
);
for ($i = 0; $i < count($students); $i = $i+1) {
    $result =  '<a href="details.php?name=' . $students[$i]["name"] . "&age=" . $students[$i]["age"] . '">' . $students[$i]["full_name"] . '</a>  ';

	echo $result;

	echo '<a href="details_mark.php?name=' . $students[$i]["name"] . "&mark=" . $students[$i]["mark"] . '">Mark</a><br />';
	//echo '<a href="details.php?name=Angie"> ' . $students[$i]["name"] . ' </a><br />';
	
	//echo '<p>' . $students[$i]["name"] . '</p>';
	//$myColor = 'green';
	
	//echo '<p style="color:red">' . $students[$i]["name"] . '</p>';
	//echo '<p style="color:red">' . $students[$i]["name"] . '</p>';
	
	//echo '<p style="color:' . $myColor . '">' . $students[$i]["name"] . '</p>';
	
	//echo "<p style='color:" . $myColor . "'>" . $students[$i]["name"] . '</p>';
	//echo '<p style="color:' . $myColor . '">Angie</p>';
}
echo 'FINISH ALL';
//<a href="details.php?name=ANGIE">ANGIE</a>

//<a href="details.php?name= + ANGIE +  "> + ANGIE + "</a>"