<?php

$num = 18;

$num1 = 20;

if($num === $num1){
    echo $num + $num1 ;

}else if ($num < $num1){
    echo $num - $num1 ."</br>";
    echo $num * $num1 ."</br>";
    echo $num / $num1 ."</br>" ;
    echo $num ** $num1 ."</br>";
    echo $num1 % $num ."</br>";

}else {
    echo "Hello ";
}

echo phpinfo()

?>