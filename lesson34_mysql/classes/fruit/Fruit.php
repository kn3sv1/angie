<?php

/**
 * Class Fruit
 * https://www.w3schools.com/php/php_oop_constructor.asp
 */
class Fruit
{
    private $name;
    private $color;

    public function __construct($name, $color) {
        $this->name = $name;
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @param mixed $color
     */
    public function setColor($color): void
    {
        $this->color = $color;
    }

    /**
     * @return mixed
     */
    public function getNameAndColor()
    {
        return 'name:' . $this->makeBoldAndColor($this->name) . ' color:' . $this->makeBoldAndColor($this->color, $this->color);
    }

    /**
     * @param $text
     * @param string $color this is default argument before required arguments
     * @return string
     */
    private function makeBoldAndColor($text, $color = null)
    {
        //if no color we shouldnt create useless property
        if ($color === null) {
            return "<strong>{$text}</strong>";
        }
        return "<strong style='color:{$color}'>{$text}</strong>";
    }


}


