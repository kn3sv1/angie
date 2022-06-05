<?php


class Student
{
//alt + enter to assign object to property in construct not to type $this->name = $name ect
    /**
     * @var string
     */
    private $name;
    /**
     * @var string
     */
    private $diploma;

    public function __construct(string $name, string $diploma)
    {
        $this->name = $name;
        $this->diploma = $diploma;
    }

    /**
     * right click - generate getters
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getDiploma(): string
    {
        return $this->diploma;
    }
}
