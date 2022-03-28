<?php

$str  = "hello omar samir shawky foud";

echo $str . "<br>";

$arr = str_split($str , 5); // param is the length


echo "<pre>";

print_r($arr);

echo "<pre>";

//chunk-split

$str  = "hello omar samir shawky";



$arr = chunk_split($str , 5 , " "); // param is the length


echo $arr;



?>