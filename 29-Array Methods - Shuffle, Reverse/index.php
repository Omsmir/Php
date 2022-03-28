<?php
$names = array("html","css","js","ajax");

echo "<pre>";

print_r($names);

echo "</pre>";

$reversed = array_reverse($names,true); //true preserve the key arrange


echo "<pre>";

print_r($reversed);

echo "</pre>";

shuffle($names); //arrange the elements randomly 


echo "<pre>";

print_r($names);

echo "</pre>";






?>