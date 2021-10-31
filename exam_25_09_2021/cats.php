<?php

if (!empty($_GET['name'])) {
	include "cat_pages/" . $_GET['name'] . ".html";
} else { ?>
<a href="/angie/exam_25_09_2021/cats.php?name=amanda">Amanda</a><br /><br />
<a href="/angie/exam_25_09_2021/cats.php?name=hitler">Hitler</a><br /><br />
<a href="/angie/exam_25_09_2021/cats.php?name=tedaki">Tedaki</a><br /><br />
<a href="/angie/exam_25_09_2021/cats.php?name=gucci">Gucci</a><br /><br />
<a href="/angie/exam_25_09_2021/cats.php?name=ginger">Ginge</a><br /><br />

<?php
}