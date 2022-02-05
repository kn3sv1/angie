<?php

require_once 'Subject.php';
require_once 'Student.php';
require_once 'College.php';
require_once 'CommonStudents.php';


//SUBJECTS
$math = new Subject(1, 'Mathematics');
$bookkeeping = new Subject(2, 'Bookkeeping');
$english = new Subject(3, 'English');
$trading = new Subject(4, 'Trading');



//STUDENTS
$angela = new Student();
$angela->id = 880355;
$angela->gender = 'Female';
$angela->age = 20;
$angela->fname = 'Angela';
$angela->lname = 'Neophytou';
$angela->classroom = '1B';
$angela->photo = 'Angie.png';

//$angela->printInfo();

$roma = new Student();
$roma->id = 10000;
$roma->gender = 'Male';
$roma->age = 30;
$roma->fname = 'Roma';
$roma->lname = 'Satanovsky';
$roma->classroom = '2B';
$roma->photo = 'Roman.png';


$george = new Student();
$george->id = 9000;
$george->gender = 'Male';
$george->age = 35;
$george->fname = 'George';
$george->lname = 'Neophytou';
$george->classroom = '2B';
$george->photo = 'George.png';



$cda = new College('CDA Limassol', [$math, $bookkeeping, $english]);
$cda->addStudent($angela);
$cda->addStudent($roma);
$cda->addStudent($george);


$forex = new College('Forex of Paphos', [$math, $trading]);
$forex->addStudent($george);
$forex->addStudent($angela);

$cyprus = new College('Cyprus College', [$math]);
$cyprus->addStudent($george);

//$forex->printStudents();
//echo "<p style='font-size: 24px;font-weight: bold;color: red'>remove student</p>";
//$forex->removeStudent($george);
//$forex->printStudents();

$commonStudents = new CommonStudents();
$commonStudents->printStudents($cda, $forex);
$commonStudents->printStudents($cyprus, $forex);
$commonStudents->printStudents($cyprus, $cda);