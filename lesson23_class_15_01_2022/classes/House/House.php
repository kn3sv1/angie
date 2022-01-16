<?php

class House
{
    public $door;
    public $windows;
    public $photo;

    public function __construct(Door $door, array $windows, $photo = 'no-photo.png')
    {
        $this->door = $door;
        $this->windows = $windows;
        $this->photo = $photo;
    }

    function print() {
        echo "<div style='border-bottom:2px solid #000'>";
        echo "This is HOUSE info: <br />";
        $this->door->printDoor();
        echo 'Windows of house:<br />';
        /** @var Window $window */
        foreach ($this->windows as $window) {
            $window->printWindow();
        }
        echo "</div>";
    }
}