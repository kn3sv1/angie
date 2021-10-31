<!DOCTYPE html>
<html>
<body>

<?php
$time = date("H");
echo "<p>The hour of the server is:" . $time . ".</p>";

if ($time < "10") {
	echo "Good morning!";
} elseif ($time > "20") {
	echo "Good evening!";
} else {
	echo "Good afternoon!";
}
?>

</body>
</html>
