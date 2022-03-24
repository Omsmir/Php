<?php


$names = array("html","css","js","ajax");

// echo array_pop($names) . "<br>";

// echo array_rand($names);

// echo array_shift($names) . "<br>";

$new =  array_slice($names , 1 , 2) ;

print_r($new) . "<br>";



echo "<pre>";


 array_push($names , "omar");





print_r($names);


echo "</pre>";


// $calc = array(1,2,6,3);

// $var = array_sum($calc);

// print_r($var);


$calc = array(2,0,3);
$calc1 = array(1,2,6,6);//returns the different var


$var = array_diff($calc,$calc1);

print_r($var) ;
echo "</br>";

function power($ele){
    return ($ele ** $ele);
}

$map = array_map("power", $calc) ;

print_r($map);

echo "<br>";
$newArr = array_chunk($calc1 , 1);


print_r(array_chunk($calc1, 2));




?>
