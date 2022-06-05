<?php


class BankAccount
{
    /** @var int $accountNumber */
    private $accountNumber;

    /** @var int $balance */
    private $balance;

    public function __construct(int $accNum, int $balance)
    {
        $this->accountNumber = $accNum;
        $this->balance = $balance;
    }

    /**
     * @return int
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @return int
     */
    public function getAccountNumber(): int
    {
        return $this->accountNumber;
    }

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }

    public function withdraw($amount)
    {
        if ($amount <= $this->balance) {
            $this->balance -= $amount;
            return true;
        }
        return false;

    }
}

//$obj1 = new BankAccount(111, 2000);
//$obj1->deposit(5);
//$obj1->deposit(10);
//
//$obj2 = new BankAccount(222, 1000);
//$obj2->deposit(20);
//
//var_dump($obj1->getBalance());
//
//var_dump($obj2->getBalance());