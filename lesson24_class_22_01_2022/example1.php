<?php

require_once 'Student.php';


echo 'Hello <br />';
$s = new Student();
$s->age = 50;
$s->fname = 'Angela';
$s->lname = 'Neophytou';
$s->classroom = '1B';


$s1 = new Student();
$s1->age = 40;
$s1->fname = 'Baso';
$s1->lname = 'Papandopoulou';
$s1->classroom = '2C';

//echo $s->age;
$s1->printAge();
$s1->changeAge(100);
$s1->printAge();

echo '<br/><br/>';

$s1->printInfo();

echo '<br/><br/>';

$s->printInfo();
