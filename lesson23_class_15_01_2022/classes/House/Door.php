<?php

class Door
{
    public $color;
    public $size;
    public $photo;

    public function __construct($color = 'black', $size = '2 meters', $photo = 'no-photo.png')
    {
        $this->color = $color;
        $this->size = $size;
        $this->photo = $photo;
    }

    function printDoor() {
        echo "<div style='color:green'>
            Door is:<br />
            <b>Color $this->color,</b><br />
            <b>Size $this->size,</b><br />
            <img src='photo_door/{$this->photo}' /><br />
        </div>";
    }
}