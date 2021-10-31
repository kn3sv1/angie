<!DOCTYPE html>
<html>
<body>

<?php
$cars = array (
  array("Tedaki", 5, 100),
  array("Ginger", 6000, 200),
  array("Hitler", 7, 300),
  array("Gucci", 8, 500),
  array("Katerina", 800, 5000, 666666., 666666,666666,666666,666666,666666),
);
    
for ($row = 0; $row < count($cars); $row++) {
  echo "<p><b>Cat number $row</b></p>";
  echo "<ul>";
  for ($col = 0; $col < count($cars[$row]); $col++) {
    echo "<li>".$cars[$row][$col]."</li>";
  }
  echo "</ul>";
}


echo "Direct address<br />";
print_r($cars[4]);
echo "<br /> COUNT:" . count($cars[4]);
?>

</body>
</html>
