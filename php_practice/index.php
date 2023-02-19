<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <select name="" id="">
        <?php
            for ($i = 0; $i <= 50; $i++) {
                echo '<option value="' . $i . '">The number is ' . $i . '</option>';
            }
        ?>
    </select>

    <ul>
        <?php
            for ($i = 0; $i <= 50; $i++) {
                echo '<li>Item ' . $i . '</li>';
            }

        ?>

    </ul>
</body>
</html>
