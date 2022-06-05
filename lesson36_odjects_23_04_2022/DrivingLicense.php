<?php

class DrivingLicense
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $category;

    public function __construct(int $id, string $category)
    {

        $this->id = $id;
        $this->category = $category;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getCategory(): string
    {
        return $this->category;
    }
}
