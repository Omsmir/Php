<?php


// function say($fname , $lname , $age ){

//     echo "Hello " . $fname . $lname . "And My Age Is ". $age . ($age * 5) ;
// }

// say("omar " , "samir " , 18 );


function generateYears($start , $end){

    echo "<select name='years'";

    for ($i = $start ; $i <= $end ; $i++){
        echo "<option value='$i'>" . $i . "</option>";
    }

    echo "</select>";

};

generateYears(1950 , 2022);

?>