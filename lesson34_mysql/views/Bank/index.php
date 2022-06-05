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

<h2>BANK ACCOUNT</h2>

<table>
    <tr>
        <th>ID</th>
        <th>NAME</th>
        <th>SURNAME</th>
        <th>ACCOUNT NUMBER</th>
        <th>BALANCE</th>
    </tr>
    <?php
    //we write full path to file to show where Person class exists because it exists in another place too
    /** @var classes/bank/Person $person */
    foreach ($persons as $person) {
        ?>
        <tr>
            <td><a href="/angie/lesson34_mysql/index.php?controller=bank&action=view&id=<?php echo $person->getId() ?>"><?php echo $person->getId() ?></a></td>
            <td><?php echo $person->getName(); ?></td>
            <td><?php echo $person->getSurname() ?></td>
            <td><?php
                //object is inside object
                echo $person->getAccount()->getAccountNumber();
             ?></td>
            <td><?php
                //object is inside object
                echo $person->getAccount()->getBalance();
                ?></td>
        </tr>
    <?php } ?>
</table>
</body>
</html>