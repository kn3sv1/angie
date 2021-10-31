<?php

// http://html5.local/angie/lesson05_function/

// https://www.w3schools.com/php/php_functions.asp

//$arr = array("key1" => "value1", "key2" => "value2");
//echo count($arr);

/*
function writeMsg() {
  echo "Good Morning world!<br />";
}

writeMsg(); // call the function
writeMsg();
writeMsg();
writeMsg();
*/



$arr = array("yhngfhhj" => "value1", "555" => "value2");
print_r($arr);
echo "<br /><br />";

//READ https://www.php.net/manual/en/function.array-keys.php
$arr_keys = array_keys($arr);  //long version
print_r($arr_keys);


echo "<br /><br />";
//https://www.php.net/manual/en/function.array-values.php
print_r(array_values($arr)); //short version to print values

//echo "<br /><br />";

//print_r(array_keys($arr)); //short version to print keys

function hello($name, $age, $hobbies) {
  echo "Hello $name, your age is $age, we wish you a good day!<br />";
  echo "Your hobbies are: ";
  for ($i = 0 ; $i < count($hobbies); $i = $i + 1) {
	   echo $hobbies[$i] . ", ";
  }
}

echo "<br /><br />";
hello("Angie", 30, array("dancing", "singing"));

echo "<br /><br />";
hello("Roma", 31, array("swimming", "cycling", "driving"));

echo "<br /><br />";
hello("Katerina", 61, array("driving"));

echo "<br /><br />";
hello("Maria", 32, array("playing tennis", "swimming", "running"));





























