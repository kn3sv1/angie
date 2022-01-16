<?php

class Window
{
    public $size;
    public $photo;

    public function __construct($size = '2x2 meters', $photo = 'no-photo.png')
    {
        $this->size = $size;
        $this->photo = $photo;
    }

    function printWindow() {
        echo "<div style='color:red'>
            Window is:<br />
            <b>Size $this->size,</b><br />
            <img src='photo_window/{$this->photo}' /><br/>
        </div>";
    }
}