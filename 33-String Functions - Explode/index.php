<?php

// $str = "hello i'm omar samir shawky";

$str = "style master index";

echo $str . "<br>";


// $arr = explode(" ",$str , 3); // puts the first two elements in single arrays and the rest of the string in a single array
$arr = explode(" ",$str , 3);

echo "<pre>";

print_r($arr);


echo "</pre>";

for ($array = 0 ; $array < count($arr) ; $array++){
    // echo "<link rel='stylesheet' href='css/" . $arr[$array] . ".css'/>";
    echo "<link rel='stylesheet' href='css/$arr[$array].css'/>";
}


?>