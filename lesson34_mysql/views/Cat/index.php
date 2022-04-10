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
        <th>Id</th>
        <th>Name</th>
        <th>Color</th>
        <th>City</th>
        <th>Photo</th>
        <th>Hobby</th>
        <th>Friend</th>
        <th>Action</th>
    </tr>
    <?php foreach ($cats as $cat) {?>
    <tr>
        <td><a href="/angie/lesson34_mysql/index.php?controller=cat&action=view&id=<?php echo $cat['id'] ?>"><?php echo $cat['id'] ?></a></td>
        <td><?php echo $cat['name'] ?></td>
        <td><?php echo $cat['color'] ?></td>
        <td><?php echo $cat['city'] ?></td>
        <td><?php echo !empty($cat['photo']) ? '<img height="100" src="' . $cat['photo']. '?rand='. rand(1000,2000)  . '" />': '';  ?></td>
        <td><?php echo $cat['hobby'] ?></td>
        <td><?php echo $cat['friend'] ?></td>
        <td><a href="/angie/lesson34_mysql/index.php?controller=cat&action=update&id=<?php echo $cat['id'] ?>">Edit</a></td>
    </tr>
    <?php } ?>
</table>
<br />
<a href="/angie/lesson34_mysql/index.php?controller=cat&action=add">Add cat</a>
</body>
</html>

