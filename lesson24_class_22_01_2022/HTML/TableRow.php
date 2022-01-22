<?php

class TableRow
{
    private $data = [];
    private $styleTR = '';

    public function __construct(array $data, string $styleTR = '')
    {
        $this->data = $data;
        $this->styleTR = $this->getStyle($styleTR);
    }

    private function getStyle($style) {
        return !empty($style) ? sprintf(' style="%s"', $style) : '';
    }

    public function printRow()
    {
        if (empty($this->data)) {
            return;
        }

        echo sprintf(PHP_EOL. '<tr%s>' . PHP_EOL, $this->styleTR);
        foreach ($this->data as $row) {
            echo sprintf("\t". '<td>%s</td>' . PHP_EOL, $row);
        }
        echo '</tr>';
    }
}