<?php

class Cat
{
    //if we change one day name of file i will replace this in one place: constant otherwise i have to search in all files to find no_image .png
    const DEFAULT_PHOTO = 'no-photo.png';

    public $name;
    public $color;
    public $age;
    public $photo;

    public function __construct($name2, $color2, $age2, $photo = self::DEFAULT_PHOTO)
    {
        $this->name = $name2;
        $this->color = $color2;
        $this->age = $age2;
        $this->photo = $photo;
    }

    function speak() {
        echo "<br />Meu meu...I am $this->name</br />";
    }

    function eat($food) {
        echo "<br />I am $this->name and I am eating $food</br />";
    }

    function speakAndEat($food) {
        echo "<p style='color:red;font-weight: bold'>";

        $this->speak();
        $this->eat($food);

        echo '</p>';
    }

    function setPhoto($photo2) {
        $this->photo = $photo2;
    }

    function removePhoto() {
        $this->photo = self::DEFAULT_PHOTO;
    }

    function setAge($age2) {
        $this->age = $age2;
    }

    function print() {
        echo "<p style='border-bottom:2px solid #000'>
            <b>Name $this->name,</b><br />
            <b>Color $this->color,</b><br />
            <b>Age $this->age,</b><br />
            <img src='photo_cats/{$this->photo}' /><br />
        </p>";
    }
}