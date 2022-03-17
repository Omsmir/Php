<?php

$age = 18 ;

$skillyears = 2 ;

$haveCar = "no" ;


if($age < 18 and  $skillyears >= 2){

    echo $haveCar;
}else if($age = 18 && $haveCar === "no"){

    echo "okay" ."</br>";

};



$name  = "omar";

$age  = 20;

$job = "develpoer";

if($age > 20  or  $name != "omar"){
    echo "accepted";

}else if ($job == "engineer" || $job != "plumber" || $job == "developer") {

    echo "You Are Good To Go";

}

?>