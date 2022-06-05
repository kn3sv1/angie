<?php


class Person
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
     * @var $dateOfBirth string
     */
    private $dateOfBirth;

    public function __construct(string $fname, string $lname, string $dateOfBirth)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        $this->dateOfBirth = $dateOfBirth;
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
     * @return string
     */
    public function getDateOfBirth(): string
    {
        return $this->dateOfBirth;
    }

    public function getAge($date): int
    {
        //we separate delimiter(/) from the rest of text then we use print_r to see what is inside variable (to break into parts)
        //then when we find which key belongs to the current year we subtract from it the previous year
        $birhParts = explode('/', $this->dateOfBirth);
        $dateParts = explode('/', $date);

//        echo '<pre>';
//        print_r($birhParts);
//        print_r($dateParts);

        return $dateParts[2] - $birhParts[2];
    }
}

$p1 = new Person("Angie", "Neophytou", "28/01/1984");
//$p2 = new Person("Roman", "Satanovsky", "20/10/1985");

//echo $p1->getFname();

//This is not correct way in object oriented programming because two function(name and last name) belong
//to the same object
//echo $p1->getFname() . ' ' . $p1->getLname();

//we create one function which returns two objects joined together not to have to repeat code
//echo $p1->getFullName();

//now we will show age of person on this current date
echo  $p1->getAge("23/04/2021");