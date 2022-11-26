<?php

include 'cars.php';

?>

<!DOCTYPE html>
<html>
<head>
<style>
    body {
        padding: 50px;
    }

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
<div style="font-size: 20px;font-weight: bold">
    Filter cars by model:
        <a href="table.php">All Models</a>&nbsp;
        <a href="table.php?model=Volvo">Volvo</a>&nbsp;
        <a href="table.php?model=Toyota">Toyota</a>&nbsp;
        <a href="table.php?model=Suzuki">Suzuki</a>&nbsp;
        <a href="table.php?model=Mercedes">Mercedes</a>&nbsp;
</div>
<h1 style="text-align: center">Andys Motors</h1>
<table>
  <tr>
    <th>Model</th>
    <th>Year of registration</th>
    <th>Color</th>
    <th>Photo</th>
  </tr>
<!--   Never set variable ($color) before for loop otherwise when we change color after we match a condition
       the rest of car rows will have that color. Thats why we set it inside the loop to say foreach car have
       that color then if a condition occurs change the color (red)
-->
  <?php for($i = 0; $i < count($cars); $i++) {

      if (!empty($_GET['model']) &&  $_GET['model'] !== $cars[$i]['model']) {
          continue;
      }


      $color = '';
      if ($cars[$i]['model'] == 'Toyota') {
         $color = 'red';
      }
  ?>
   <tr style="background-color: <?php echo $color ?>">
      <td><?php echo $cars[$i]['model'] ?></td>
      <td><?php echo $cars[$i]['year of registration'] ?></td>
      <td><?php echo $cars[$i]['color'] ?></td>

<!--We create one file for all cars with parameter id (?id=) so we dont need to create a file for each car
    all we do is add another car in array
-->
      <td><a href="car_detail.php?id=<?php echo $i; ?>"><img width="70" src="<?php echo $cars[$i]['photo'] ?>"></a></td>
   </tr>
  <?php } ?>
</table>

</body>
</html>


