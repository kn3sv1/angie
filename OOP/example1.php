<?php
/*
$cats = array(
	array('name' => 'Amanda', 'color' => 'red', 'age' => 1),
	array('name' => 'Hitler', 'color' => 'green', 'age' => 2),
	array('name' => 'Ginge', 'color' => 'blue', 'age' => 3),
);

for($i = 0; $i < count($cats); $i++) {
	echo "Name: {$cats[$i]['name']}<br />";
	echo "Color: {$cats[$i]['color']}<br />";
	echo "Age: {$cats[$i]['age']}<br />";
	echo "<br />------------<br />";
}
*/

class PersonCatLover {
    private $name;
    private $cats = array();

    public function __construct($name, $cats)
    {
        $this->name = $name;
        $this->cats = $cats;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getCats(): array
    {
        return $this->cats;
    }

    public function printPerson()
    {
        echo "<br />Name: {$this->getName()}<br />";
        echo "Cats: ";
        /** @var CatModel $cat */
        foreach ($this->cats as $cat) {
           echo $cat->getName() . ", ";
        }
        echo "<br />";
    }
}

class Cat {
    private $name;
    private $color;
    private $age;
    private $friends = array();

    public function __construct($name, $color, $age)
    {
        $this->name = $name;
        $this->color = $color;
        $this->age = $age;
    }
    public function addFriend($cat)
    {
        $this->friends[] = $cat;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getColor()
    {
        return $this->color;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function printCat()
    {
        echo "Name: {$this->getName()}<br />";
        echo "Color: {$this->getColor()}<br />";
        echo "Age: {$this->getAge()}<br />";

        if (count($this->friends) > 0) {
            echo "<div style='background-color: #8a82fa;padding-left:50px'>FRIENDS:<br />";
            $this->printFriends();
            echo "</div>";
        }

        echo "<br />------------<br />";
    }

    public function printFriends()
    {
        /** @var CatModel $friend */
        foreach ($this->friends as $friend) {
            $friend->printCat();
        }
    }
}

//OUTSIDE OF CLASS WE CALL: THE CLIENT USE objects CAT
$amanda = new CatModel('Amanda',  'red',  4);
$hitler = new CatModel('Hitler', 'white & black',  3);
$ginge = new CatModel('Ginge', 'red & white',  2);

$amanda->addFriend($hitler);

$ginge->addFriend($hitler);
$ginge->addFriend($amanda);

$cats = array($amanda, $hitler, $ginge);

/** @var CatModel $cat */
foreach ($cats as $cat) {
    $cat->printCat();
}


$angie = new PersonCatLover('Angie', array($amanda, $ginge));
$roman = new PersonCatLover('Roman', array($hitler));
$persons = array($angie, $roman);
echo '<p style="color:#000; font-size: 20px;background-color: #66ffcc">Cat\'s lovers:<p>';
foreach ($persons as $person) {
    $person->printPerson();
}