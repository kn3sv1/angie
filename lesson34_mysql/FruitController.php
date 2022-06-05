<?php
include_once 'classes/fruit/Fruit.php';

class FruitController {


    /**
     * http://html5.local/angie/lesson34_mysql/index.php?controller=fruit&action=index
     */
    public function indexAction()
    {
        $fruits = [
            new Fruit('Apple', 'red'),
            new Fruit('Banana', 'yellow'),
            new Fruit('Orange', 'orange'),
            new Fruit('Kiwi', 'green'),
            new Fruit('Tomato', 'red'),
            new Fruit('Lemon', 'yellow'),
        ];

        include 'views/Fruit/index.php';
    }
}
