<?php

require_once 'Chair.php';
require_once 'MyTable.php';

class House
{
    /**
     * @var Chair[]
     */
    private $chairs;
    /**
     * @var MyTable[]
     */
    private $tables;

    //construct is related only to objects so $chairs and $tables cannot be used in foreach
    public function __construct(array $chairs, array $tables)
    {
        $this->chairs = $chairs;
        $this->tables = $tables;
    }

    public function printTables()
    {
        echo "<h1 style='color: #0033cc;padding-bottom: 20px'>Tables</h1>";

        $data = [];
        foreach ($this->tables as $table) {
            $color = $table->getColor();
            //create key by color if it doesnt exist
            if (!isset($data[$color])) {
                $data[$color] = [];
            }
            //we push inside color key array
            $data[$color][] = $table;
        }

        foreach ($data as $color => $tables) {
            echo "<p style='font-weight: bold;color:red'>Table by color: {$color}</p>";
            foreach ($tables as $table) {
                echo "<p>{$table->getName()}</p>";
            }
        }
    }

    public function printChairs()
    {
        echo "<h1 style='color:#0033cc'>Chairs</h1>";

        $data = [];
        foreach ($this->chairs as $chair) {
            $name = $chair->getName();
            if (!isset($data[$name])) {
                $data[$name] = [];
            }
            $data[$name][] = $chair;
        }

        foreach ($data as $name => $chairs) {
            echo "<p style='font-weight: bold;color:red'>Chair by room: {$name}</p>";
            foreach ($chairs as $chair) {
                echo "<p>Color: {$chair->getColor()}</p>";
            }
        }
    }
}
