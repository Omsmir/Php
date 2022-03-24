<?php

$names = array(
    "html",
    "css",
    "js",
    "ajax",
    "jquery",
    "php"
);
echo "<pre>";

print_r($names);

$new = array_pop($names). "<br>";

print_r($new) ;


$make = array_shift($names)."<br>";

echo $make ;

print_r($names);


echo"</pre>";


?>