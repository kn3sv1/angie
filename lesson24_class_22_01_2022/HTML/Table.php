<?php

require_once 'TableRow.php';

//convert array to html table
class Table
{
    private $data = [];
    private $style = '';

    public function __construct(array $data, string $style = '')
    {
        $this->data = $data;
        $this->style = $this->getStyle($style);
    }

    private function getStyle($style) {
        return !empty($style) ? sprintf(' style="%s" ', $style) : '';
    }

    public function printTable()
    {
        if (empty($this->data)) {
            return;
        }

        echo sprintf('<table%s>', $this->style);
        /** @var TableRow $row */
        foreach ($this->data as $row) {
            $row->printRow();
        }
        echo '</table>';
    }
}