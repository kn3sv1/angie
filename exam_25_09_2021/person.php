<?php

if (!empty($_GET['name'])) {
	include "pages/" . $_GET['name'] . ".html";
} else { ?>
<a href="/angie/exam_25_09_2021/person.php?name=andreas">Andreas Doctor</a><br /><br />
<a href="/angie/exam_25_09_2021/person.php?name=katerina">Katerina Doctor</a><br /><br />
<a href="/angie/exam_25_09_2021/person.php?name=angela">Angela Doctor</a><br /><br />
<a href="/angie/exam_25_09_2021/person.php?name=george">George Doctor</a><br /><br />
<a href="/angie/exam_25_09_2021/person.php?name=gianna">Gianna Doctor</a><br /><br />

<?php
}