<?php

$names = array(
"html" => "60%",
"css" => "100%",
"js" => "80%",
"ajax" => "15%",
10 => "12%",
true => "Not false"
);

print_r($names);

$names["php"] = "30%";

echo "<ul>";

foreach ($names as $keys => $names){
    echo "<li>" . $keys ." => " . $names;
}

echo "</ul>";


?>