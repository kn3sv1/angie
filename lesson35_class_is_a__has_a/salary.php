<?php

//we named class and function abstract because without job title we cannot give them salary rate
//so we cannot create object of staff because it is abstract
abstract class Staff {
 abstract public function getHourRate();
}

class Doctor extends Staff
{
    public function getHourRate()
    {
        return 50;
    }
}

class Gynocologist extends Doctor
{
    public function getHourRate()
    {
        return parent::getHourRate() + 20;
    }
}

class Accountant extends Staff
{
    public function getHourRate()
    {
        return 20;
    }
}

class AssistantAccountant extends Staff
{
    public function getHourRate()
    {
        return 10;
    }
}

//in oop we pass objects everywhere not int or string because staff can have a lot of data inside
function calculateSalary(Staff $staff, $totalHours) {
    return $totalHours * $staff->getHourRate();
}

$totalHours = 100;
$salary = calculateSalary(new Doctor(), $totalHours);
echo "<p>Doctor worked {$totalHours} hours and earned {$salary}</p>";

$totalHours = 100;
$salary = calculateSalary(new Gynocologist(), $totalHours);
echo "<p>Gynocologist worked {$totalHours} hours and earned {$salary}</p>";

$totalHours = 100;
$salary = calculateSalary(new Accountant(), $totalHours);
echo "<p>Accountant worked {$totalHours} hours and earned {$salary}</p>";

$totalHours = 100;
$salary = calculateSalary(new AssistantAccountant(), $totalHours);
echo "<p>AssistantAccountant worked {$totalHours} hours and earned {$salary}</p>";