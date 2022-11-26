<?php

include 'cars.php';

//here we get the key of array from address bar
$id = $_GET['id'];
$car = $cars[$id]; //this current car

$relatedCars = [];

for ($i = 0; $i < count($cars); $i++) {
    if ($cars[$i]['model'] == $car['model']) {
        continue;
    }
    //we preserve the key because its associative array to be able to access all the values later
    $relatedCars[$i] = $cars[$i];
    //$relatedCars[] = $cars[$i];
}
echo '<pre>';
print_r($relatedCars);

$relatedCarKey = array_rand($relatedCars,1);
print_r($relatedCarKey);

$relatedCar = $relatedCars[$relatedCarKey];
print_r($relatedCar);

?>
<br /><br />

<?php
$color = '';

if ($car['model'] == 'Toyota') {
    $color = 'red';
}
?>

<body style="background-color: <?php echo $color; ?>">
<h1><?php echo $car['model']; ?></h1>

<img src="<?php echo $car['photo']; ?>" />
<br /><br />

<h2>Related car</h2>
<a href="car_detail.php?id=<?php echo $relatedCarKey; ?>"><?php echo $relatedCar['model'] ?></a>
<br /><br />
<img src="<?php echo $relatedCar['photo'] ?>" />

</body>
