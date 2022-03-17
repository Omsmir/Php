<?php


$views = 150;

function increase($views){
    // echo $views + 1;

    return $views + 1 ;
    
};

// increase($views);

echo increase($views);
echo  "<br>";
var_dump(increase(($views)));

?>