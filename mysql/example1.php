<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "angie_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
//in this line we are already succesfuly connected to mysql



//show all cats from database, table name "cats"
function showAll()
{
	global $conn;
	$sql = "SELECT * FROM cats";
	//make request and get result from mysql
	$result = $conn->query($sql);

	while($row = $result->fetch_assoc()) {
		echo "id: " . $row["id"]. " - Name: " . $row["name"] . " - Likes: " . $row["likes"] . "<br>";
	}
}
//if it exist cat name in table name "cats"
function isExist($name)
{
	global $conn;
	$sql = "SELECT * FROM cats WHERE NAME = '$name'";
	//echo $sql;
	$result = $conn->query($sql);
	
	$number_rows = $result->num_rows;
	//var_dump($number_rows);
	if ($number_rows > 0){
		return true;
	} else {
		return false;
	}		
	
	//return true;
	//return false;
}

function add($name)
{
	global $conn;
	if (isExist($name) === true) {
		echo "<p style='color:red'>Cat: <span style='background:yellow'>$name</span> already EXIST!!!</p>";
	} else {
		$sql = "INSERT INTO cats (name) VALUES ('$name')";
		$conn->query($sql);//apply sql command to sql server - it will insert in table this cat
		echo "<p style='color:green'>New cat:  <span style='background:yellow'>$name</span> added to the table CATS</p>";
	}
}
//Update cat name
function update($id, $name)
{
	global $conn;
	$sql = "UPDATE cats SET `name` = '$name' WHERE (`id` = '$id')";
	$result = $conn->query($sql);
}

function addOneLike($id)
{
	global $conn;
	$sql = "UPDATE cats SET `likes` = likes + 1 WHERE (`id` = '$id')";
	$result = $conn->query($sql);
}

function removeOneLike($id)
{
	global $conn;
	//we dont want to make MINUS LIKES
	$sql = "UPDATE cats SET `likes` = likes - 1 WHERE (`id` = '$id') AND likes > 0";
	$result = $conn->query($sql);
}

//EXAMPLE OF USE:
function operationFromBrowser()
{
	if (empty($_GET['operation'])) {
		//http://html5.local/angie/mysql/example1.php
		die("<p style='color:red'>OPERATION DOES NOT EXIST!!! Dying......</p>");
		//return;
	}
	
	if ($_GET['operation'] == 'show') {
		//http://html5.local/angie/mysql/example1.php?operation=show
		showAll();
	} elseif ($_GET['operation'] == 'add' && !empty($_GET['name'])) {
		//http://html5.local/angie/mysql/example1.php?operation=add&name=66666
		add($_GET['name']);
	} elseif ($_GET['operation'] == 'update' && !empty($_GET['name']) && !empty($_GET['id'])) {
		//http://html5.local/angie/mysql/example1.php?operation=update&id=7&name=George%20Neoph1
		update($_GET['id'], $_GET['name']);
	} elseif ($_GET['operation'] == 'like' && !empty($_GET['id'])) {
		//http://html5.local/angie/mysql/example1.php?operation=like&id=7
		addOneLike($_GET['id']);
	} elseif ($_GET['operation'] == 'dislike' && !empty($_GET['id'])) {
		//http://html5.local/angie/mysql/example1.php?operation=dislike&id=7
		removeOneLike($_GET['id']);
	}
}

//we insert one cat more
//var_dump(isExist('katerina'));

//add('george');
//add('poppi');

//update(7, "George Neophytou");
//showAll();


//UPDATE from BROWSER - any operation we can execute through browser to server - we can add/delete ect cats from browser
operationFromBrowser();
showAll();
