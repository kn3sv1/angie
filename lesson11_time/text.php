<?php

$text = "Hello I am from   Limassol  but now I am living in Barcelona and Barcelona";

//$text_result = "Hello I am from Limassol but now I am living in <span style='background-color:yellow'>Barcelona</span>";
//echo $text_result;

/*STEPS:
1.SPLIT: Step to split sentence to array (each word) because we can calculate length of each word
2.GO through each word and calculate length
3. WE have found longest word.
4. replace in original string this word with with word inside HTML SPAN.
*/

$arr = explode(" ", $text);

 var_dump($arr);
//echo '<pre>';
//print_r($arr);
$longest_word = $arr[0];
for ($i = 1; $i < count($arr); $i = $i + 1) {
	
	if (strlen($arr[$i]) > strlen($longest_word)) {
		$longest_word = $arr[$i];
	}
	/*
	if (strlen($arr[$i]) < strlen($longest_word) && strlen ($arr[$i]) > 0) {
		$longest_word = $arr[$i];
	}
	*/	
}

echo "<br />The longest word is: $longest_word <br />";

echo str_replace($longest_word, "<span style='background-color:yellow'>$longest_word</span>", $text);