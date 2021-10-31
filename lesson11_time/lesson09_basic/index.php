<?php

//$_MYGET= array("test" => 555, "angie" => 'value', 'color' => 'blue');
//$color = $_MYGET['color'];

$color2 = "red";
if (isset($_GET['color'])) {
	$color2 = $_GET['color'];
}

$font_size = "42px";
if (isset($_GET['font_size'])) {
	$font_size = $_GET['font_size'];
}

$user = "no name";
if (isset($_GET['user'])) {
	$user = $_GET['user'];
}

	
?>
<p style="color:<?php echo $color2; ?>;font-size:<?php echo $font_size; ?>">Hello user:<?php echo $user; ?></p>










<p style="color:<?php echo $color2; ?>;font-size:<?php echo '42px'; ?>">dynamic text color</p>
<p style="color:blue;font-size:34px">blue text</p>
<p style="color:red">red text</p>

<a href="/angie/lesson09_basic/?color=blue&roma=black">dynamic text blue</a><br />
<a href="/angie/lesson09_basic/?color=green&katerina=black">dynamic text green</a><br />
<a href="/angie/lesson09_basic/?color=yellow&angie=white">dynamic text yellow</a><br />

