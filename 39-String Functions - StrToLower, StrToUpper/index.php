<?php

$name =  "Hello i love PHP SO Much";




$new = strtolower($name);

echo $new . "<br>";


$upper = strtoupper($name);


echo $upper . "<br>";


$lc  = lcfirst($name) ;


echo $lc . "<br>";

$name =  "hello i love PHP SO Much";


$uc  = ucfirst($name) ;


echo $uc . "<br>";


$ucwords  = ucwords(strtolower($name))  ;


echo $ucwords . "<br>";

?>