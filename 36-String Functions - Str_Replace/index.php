<?php


$str = "hello omar samir shawky i love php is good and easy lang";

echo $str . "<br>";

// $str2 = str_replace("php" , "java" ,$str, $i);

// echo $str2 . " replacement count is " . $i;

$str = explode(" " , $str);


echo "<pre>";

print_r($str);


echo "</pre>";
$str2 = str_replace("php" , "javascript" ,$str);




echo "<pre>";

print_r($str2);


echo "</pre>";

$str2 = implode(" " , $str2) . "<br>";

echo $str2;
$str2 = str_replace(array("omar","samir","php"), "javascript" , $str2);

echo $str2 . "<br>";



?>