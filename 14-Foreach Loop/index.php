<?php 


// $countries = array ("America","Syria","Egypt","Iraq","Palestine","Poland");

// foreach( $countries as $value){
//     echo $value ."<br>";
// }


$countries = array (
    "Am" => "America",
    "Sy" =>"Syria",
    "Eg" =>"Egypt",
    "Ir" => "Iraq",
    "Pl"=>"Palestine",
    "po"=> "Poland");

foreach( $countries as $key => $value){
    echo $key . " => " . $value ."<br>";
}

?>