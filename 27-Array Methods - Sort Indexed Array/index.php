<?php

$names = array("html","css","js","ajax","jquery",10,20,15);


echo "<pre>";

print_r($names);


echo "</pre>";

sort($names,SORT_STRING);//sort-regular

echo "<pre>";

print_r($names);


echo "</pre>";




?>