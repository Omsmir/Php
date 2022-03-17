<?php

// $names = array(
//     array("html","css","js"),
//     array("ajax","php","jquery"),
//     array("omar","samir","shawky"),
//     array(
//         array(1,2,3)
//     )
// );

$names = array (
    "day one" => array("html","css","js"),
    "day Two" => array("ajax","php","jquery"),
    "day three" => array("omar","samir","shawky"),
    "day Four" => array(array(1,2,3)),
);


echo "<pre>";

print_r($names);


echo $names["day Four"][0][2];
// foreach($names as $keys => $value){
//     echo "<li>". $keys . " => " . $value[0] ."</li>";

// }

echo "</pre>";




?>