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

<h2>HOBBIES</h2>

<table>
    <tr>
        <th>Id</th>
        <th>Name</th>
        <th>Action</th>
    </tr>
    <?php foreach ($hobbies as $hobby) {?>
    <tr>
        <td><a href="/angie/lesson34_mysql/index.php?controller=hobby&action=view&id=<?php echo $hobby['id'] ?>"><?php echo $hobby['id'] ?></a></td>
        <td><?php echo $hobby['name'] ?></td>
        <td><a href="/angie/lesson34_mysql/index.php?controller=hobby&action=update&id=<?php echo $hobby['id'] ?>">Edit</a></td>
    </tr>
    <?php } ?>
</table>
<br />
<a href="/angie/lesson34_mysql/index.php?controller=hobby&action=add">Add hobby</a>
</body>
</html>

