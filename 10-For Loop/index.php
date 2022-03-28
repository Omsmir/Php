<?php

// for ( $i = 1 ; $i <= 20 ; $i++ ){

//     echo $i . "</br>";

// }



// echo count($langs);
$langs = array("html" , "css" , "js" , "python" ,"php","ajax");

echo "<ul>";

for ( $i = 0 ; $i < count($langs); $i++){

    echo "<li style='list-style:none;'>" . $langs[$i] . "</li>";

};

echo "</ul>";

?>


<select name="year">

<?php 

for($year = 1900 ; $year <= 2022 ; $year++){
    echo "<option>" . $year ."</option>";
};

?>

</select>