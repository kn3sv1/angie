<?php


class Clinic
{
    private $name;
    private $doctors;

    public function __construct($name, array $doctors)
    {
        $this->name = $name;
        $this->doctors = $doctors;
    }
    public function printSpecialization($spec)
    {
        /** @var Doctor $doctor */
        foreach ($this->doctors as $doctor) {
            if ($doctor->getSpecialization() !== $spec) {
                continue;
            }
            $doctor->print();
        }
    }
    public function printTable()
    {
        echo $this->name, "<br /><br />";
        echo '<table>';
        /** @var Doctor $doctor */
        foreach ($this->doctors as $doctor) {
            $css = $doctor->getName() == 'Dr.Pandazis' ? ' style="background-color:green" ' : '';
            echo "<tr {$css}>";
            echo "<td><a href='doctor_details.php?id={$doctor->getId()}'>{$doctor->getId()}</a></td>";
            echo "<td>{$doctor->getName()}</td>";
            //echo "<td>{$doctor->getSpecialization()}</td>";

            echo "<td><a href='doctor_specialization.php?specialization={$doctor->getSpecialization()}'>{$doctor->getSpecialization()}</a></td>";
            echo "<td><img width='200' height='200' src='photos/{$doctor->getPhoto()}' /></td>";
            echo '</tr>';
        }

        echo '</table>';
    }

    public function printNormal()
    {
        echo $this->name, "<br /><br />";
        /** @var Doctor $doctor */
        foreach ($this->doctors as $doctor) {
            echo "<a href='doctor_details.php?id={$doctor->getId()}'>{$doctor->getId()}</a>","<br />";
            echo $doctor->getName(),"<br />";
            echo $doctor->getSpecialization(),"<br />";
            echo "<img width='200' src='photos/{$doctor->getPhoto()}' /><br/>";
            echo  "<br />";
        }
    }
}