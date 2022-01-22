<?php

class Subject
{
    private $code;
    private $name;

    public function __construct($code, $name) {
        $this->code = $code;
        $this->name = $name;
    }

    public function print() {
        echo "Code: ", $this->code,"<br />";
        echo "Name: ", $this->name,"<br />";
    }

    public function toArray()
    {
        return [
            'code'    => $this->code,
            'name'    => $this->name,
        ];
    }
}