<?php

include 'doctor.php';
include 'cat.php';
echo '<pre>';

//object: $katerina of class: Doctor
$katerina = new Doctor('katerina', 'Demitridou', '4 january 1962');
echo $katerina->info(), "<br />";
echo $katerina->birthDate(), "<br />";
echo $katerina->amountOfLegs(), "<br />";

$giana = new Doctor('Giana', 'Christodoulou', '14 october 1984');
echo $giana->info(), "<br />";
echo $giana->birthDate(), "<br />";
echo $giana->amountOfLegs(), "<br />";

$teddaki = new Cat('Teddaki', 'black and white');
echo $teddaki->info(), "<br />";
echo $teddaki->amountOfLegs(), "<br />";
$teddaki->setSpeak('mour2....mour2....');
echo $teddaki->speak(), "<br />";

$ginger = new Cat('Ginger', 'red and white');
echo $ginger->info(), "<br />";
echo $ginger->amountOfLegs(), "<br />";
$ginger->setSpeak('mour mour mour ....');
echo $ginger->speak(), "<br />";

echo $ginger->hasFriend($teddaki), "<br />";