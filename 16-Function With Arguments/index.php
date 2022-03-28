<?php


function say($fname , $lname , $age ){

    echo "Hello " . $fname . $lname . "And My Age in Days Is ".  ($age * 365) ."<br>";
}

say("omar " , "samir " , 18 );


function generateYears($start , $end){
    echo "<select name='year'>";

    for($i = $start ; $i <= $end ; $i++){
        echo "<option>". $i . "</option>";
    }
    echo "</select>";
}

generateYears(1999,2022);
?>