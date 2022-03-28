<?php


$lang = "i will go at 6 o'clock";


echo $lang . "<br>";


$new = addslashes($lang) . "<br>";


echo $new;


$la = "i will\ 'have' a \little 'baby'";

$strip = stripslashes($la);

echo $strip . "<br>";

$ta = "i will <a href='have.net'>have</a> a <li>little</li> baby";

echo $ta . "<br>";

$tag = strip_tags($ta);

echo $tag; 
?>