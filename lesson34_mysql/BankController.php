<?php

include_once 'classes/bank/Person.php';
include_once 'classes/bank/BankAccount.php';

class BankController {
    /**
     * http://html5.local/angie/lesson34_mysql/index.php?controller=bank&action=index
     */
    public function indexAction()
    {
//        $acc = new BankAccount(1111, 500);
//        //$acc->balance = 30;
//        $acc->deposit(-20);
//        var_dump($acc->getBalance());
//
//        $result = $acc->withdraw(1000);
//        var_dump($result);
//        var_dump($acc->getBalance());
//
//        $acc->deposit(600);
//        $result = $acc->withdraw(1000);
//        var_dump($result);
//        var_dump($acc->getBalance());
//
//
//        die();
        $persons = [
            new Person(8003, 'Angie', 'Neophytou', new BankAccount(1111, 500)),
            new Person(8011, 'Roman', 'Satanovsky', new BankAccount(4576, 2000)),
            new Person(8075, 'Andreas', 'Pandazis', new BankAccount(5548, 5000)),
        ];

        include 'views/Bank/index.php';
    }
}
