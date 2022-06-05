<!DOCTYPE html>
<html>
<head>
    <style>
        table {
            font-family: arial, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        td, th {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        tr:nth-child(even) {
            background-color: #dddddd;
        }
    </style>
</head>
<body>

<h2>CATS</h2>

<table>
    <tr>
        <th>Name</th>
        <th>Color</th>
        <th>Name and Color</th>
    </tr>
    <?php
    //we use this to get suggestion to what function to use in this program
    /** @var Fruit $fruit */
    foreach ($fruits as $fruit) {
        //example how we can change later property of object (color of fruit)
        if ($fruit->getName() === 'Lemon') {
            $fruit->setColor('green');
        }
        ?>
    <tr>
        <td><?php echo $fruit->getName(); ?></td>
        <td><?php echo $fruit->getColor(); ?></td>
        <td><?php echo $fruit->getNameAndColor(); ?></td>
    </tr>
    <?php } ?>
</table>
</body>
</html>

