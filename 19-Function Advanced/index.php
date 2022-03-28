<?php

// function sayHello ($fname , $lname = "unknown"){

//     echo "Hello " . $fname . " " . $lname;

// };


// sayHello("omar")



function getTicket($user , $age){
    $ticket = rand(500,5000);
    if($age >= 18){
        $msg = "Hello " . $user . " Your age is " . $age . "<br>";
        $msg .= "You Are Qualifed Contgrats" . "<br>";
        $msg .= "Your Ticket ID is [ <span style='color: #f00; font-size: 25px; font-weight: bold; text-decoration: underline; cursor:pointer;'> " .  $ticket ."</span>]";

    }else {
        $msg = "Hello " . $user . " Your age is " . $age . "<br>";
        $msg .= "You Are Not Qualifed Sorry Cuz Your Age Is Under 18" . "<br>";


    }

    return $msg ;
}


// echo getTicket("omar" , 18);

function makeFrame($element){
   $frame = "<div class='omar-1'>" . $element . "</div>";


    echo $frame;
}

makeFrame(getTicket("omar" , 18));


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        .omar-1 {
            width: 400px;
            text-align: center;
            margin: 25px auto;
            font-size: 18px;
            font-weight: lighter;
            padding: 10px;
            line-height: 2;
            background-color: #eee;
            border-radius: 25px;
        }

    </style>
    
</body>
</html>