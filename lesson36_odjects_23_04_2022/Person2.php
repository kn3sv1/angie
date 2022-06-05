<?php

require_once 'Animal.php';
require_once 'Cat.php';
require_once 'Dog.php';

class Person2
{
    /**
     * @var $fname string
     */
    private $fname;

    /**
     * @var $lname string
     */
    private $lname;

    /**
     * @var $dateOfBirth DateTime
     */
    private $dateOfBirth;

    /**
     * @var Animal[]
     */
    private $pets;

    public function __construct(string $fname, string $lname, DateTime $dateOfBirth, array $pets = [])
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->dateOfBirth = $dateOfBirth;
        $this->pets = $pets;
    }
    /**
     * @return string
     */
    public function getFname(): string
    {
        return $this->fname;
    }

    /**
     * @return string
     */
    public function getLname(): string
    {
        return $this->lname;
    }

    /**
     * @return string
     */
    public function  getFullName(): string
    {
        return $this->fname . ' ' . $this->lname;
    }

    /**
     * @return Animal[]
     */
    public function getPets(): array
    {
        return $this->pets;
    }

    /**
     * @return DateTime
     */
    public function getDateOfBirth(): DateTime
    {
        return $this->dateOfBirth;
    }

    /**
     * @param DateTime $date
     * @return int
     */
    public function getAge(DateTime $date): int
    {
        //echo $date->format('Y');
        //return $date->format('Y') - $this->dateOfBirth->format('Y');

        // https://www.php.net/manual/en/class.datetime.php
        // https://www.php.net/manual/en/class.dateinterval.php
        $dateInterval = $date->diff($this->dateOfBirth);
        //echo  $dateInterval->format('%y-%m-%d %h:%i:%s');
        return $dateInterval->y;
    }
}


$p1Pets = [
    new Cat('Tefdaki'),
    new Dog('Stiven', 3),
];
$p1 = new Person2("Angie", "Neophytou", new DateTime("1984-01-28 23:59:59"), $p1Pets);
//echo  $p1->getAge(new DateTime("2022-04-28 23:59:59"));

echo '<pre>';
print_r($p1->getPets());

