<?php

class ToiletWindow extends Window
{
    function printWindow() {
        echo "<div style='color:blue'>
            Window is FOR TOILET in BEDROOM:<br />
            <b>Size $this->size,</b><br />
        </div>";
    }
}