<?php


class Person
{
    /** @var int $id */
    private $id;

    /** @var string $name */
    private $name;

    /** @var string $surname */
    private $surname;

    /** @var BankAccount $account */
    private $account;

    /**
     * Person constructor.
     * @param int $id
     * @param string $name
     * @param string $surname
     * @param BankAccount $account
     */
    public function __construct(int $id, string $name, string $surname, BankAccount $account)
    {
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->account = $account;
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
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return string
     */
    public function getSurname(): string
    {
        return $this->surname;
    }

    /**
     * @return BankAccount
     */
    public function getAccount(): BankAccount
    {
        return $this->account;
    }
}