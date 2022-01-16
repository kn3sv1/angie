<?php

/*$num_req = 1;
$sites = ["Nettuts+", "Psdtuts+", "Mobiletuts+", "Mactuts+"];
$k = array_rand($sites, $num_req);
print_r($k);

echo "<br />foreach<br />";
foreach (array(100, 200) as $key) {
    echo $key, "<br />";
}
*/


//if ($num_req > 1) {
//    foreach ($k as $key) {
//        echo "<br />";
//        print_r($sites[$key]);
//    }
//} else {
//    print_r($sites[$k]);
//}
//we use this to return an array of random keys
$a=array("red","green","blue","yellow","brown");
$random_keys=array_rand($a,3);

//$random_keys becomes array with keys
echo $a[$random_keys[0]]."<br>";
echo $a[$random_keys[1]]."<br>";
echo $a[$random_keys[2]];

echo "<br><br><br>";


$sites = ["Nettuts+", "Psdtuts+", "Mobiletuts+", "Mactuts+"];
$k = array_rand($sites,2);

echo $sites[$k[0]]."<br>";
echo $sites[$k[1]];


