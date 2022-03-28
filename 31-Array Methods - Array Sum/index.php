<?php

// $array = array(10,20,50,7.75);

$array = array (
    0 => "omar",
    1 => 10,
    2 => 20,
    3 => 50,
    4 => 5.5,
);

$sum = array_sum($array);  // avoids strings 



echo "<pre>";

print_r($array);


echo "</pre>";
echo $sum;


?>