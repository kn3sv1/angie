<?php

require_once 'Chair.php';

class FushiniChair extends Chair
{
    /**
     * @return string
     */
    public function getName(): string
    {
        return "<span style='color:#a103fc' >FUSHINI</span> " . parent::getName();
    }
}
// ["name" => 'FUSHINI ...']