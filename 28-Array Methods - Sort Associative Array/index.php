<?php


$names = array(
    "html" => 20 ."%",
    "css" => 30 ."%",
    "js" => 40 ."%",
    "ajax" => 50 ."%",
    "jquery" => 60 ."%",
    "PHP" => "25",
);

echo "<pre>";
print_r($names);


echo "</pre>";


$new = array_reverse($names);


print_r($new);



// arsort($names , SORT_NUMERIC);
// ksort($names ); //key sort && key reversed sort
krsort($names );

echo "<pre>";

print_r($names);


echo "</pre>";

?>