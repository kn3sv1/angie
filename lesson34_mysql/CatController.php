<?php

include_once 'Cat.php';

class CatController {
    private $db;

    public function __construct()
    {
        $this->db = new Cat();
    }

    /**
     * http://html5.local/angie/lesson34_mysql/index.php?controller=cat&action=index
     */
    public function indexAction() {
        $cats = $this->db->getAll();

        include 'views/Cat/index.php';
    }

    /**
     * http://html5.local/angie/lesson34_mysql/index.php?controller=cat&action=add
     */
    public function addAction() {

        include 'views/Cat/add.php';
    }

    /**
     * http://html5.local/angie/lesson34_mysql/index.php?controller=cat&action=update
     */
    public function updateAction() {

        include 'views/Cat/update.php';
    }
}
