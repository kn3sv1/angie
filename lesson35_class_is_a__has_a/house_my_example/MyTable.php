<?php


class MyTable
{
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $color;

    public function __construct(string $name, string $color)
    {
        $this->name =$name;
        $this->color =$color;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getColor(): string
    {
        return $this->color;
    }
}