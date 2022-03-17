<?php 

// $file = @fopen("omar.txt" , "r") or die ("This File Is Not Found")


// include("inc.php");


// (@include("increase.php")) or die ("this is Not Here");


$server = "localhost";
$user = "omar";
$pass = "HelloOmar";
$db = "Ourdatabase";


@mysqli_connect($server,$user,$pass,$db) or die("<h1> Request Timed Out </h1>");

?>