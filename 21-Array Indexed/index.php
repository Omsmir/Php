<?php

// $names = array("omar","samir","shawky","Ahmed",array("html","css","js"),"osama","badr","mark");
$names = array("omar","samir","shawky","Ahmed","osama","badr","mark");
// $names[]= "omar";
// $names[]= "samir";
// $names[]= "shawky";
// $names[]= "ahmed";
// $names[]= "osama";
// $names[]= "badr";
// $names[]= "mark";

echo count($names);

echo "<ul>";

// foreach($names as $names){
//     echo "<li>" . $names . "</li>";

// }

for ($i = 0; $i < count($names); $i++){
    echo "<li>" . $names[$i] . "</li>";
}

echo "</ul>";




echo "<pre>";

print_r($names);

echo "</pre>";

echo $names[0] . " ";

echo $names[1] . " ";
echo $names[2];


?>