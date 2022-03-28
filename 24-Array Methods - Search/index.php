<?php 

$names = array(
"omar" => "say hi",
"samir",
"shawky",
"Ahmed",
"osama",
"badr",
"mark"
);



// if( in_array("samir" , $names)){
//    echo "yes it is exist"  . "<br>";
// }


//  $lang = array_search("badr" ,$names ,true);


// echo "yes Its Found In Index " . $lang . " and its Name is " . $names[$lang];


 if(array_key_exists("omar", $names)){
     echo "yes its found " ;
 }

?>