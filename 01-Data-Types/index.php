
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php


$var2 = "hi " ;

$omar = array (
    "g" => "okay",
    "d" => "no",
    "s" => "maybe",
);

echo var_dump($omar) . "</br>" ;
echo $omar["g"] . "</br>" ;

$file = fopen("omar.txt" , "r");

echo $file . "</br>" ;


echo gettype($omar) . "</br>";

class noFeal {
    
} ;

$bar = new noFeal();
echo gettype($bar) . "</br>";


$num = 100 ;

print gettype($num) . "</br>";


$float = 1.2;

print gettype($float) . "</br>";


$bool = true;

print gettype($bool) . "</br>";


echo var_dump($float) . "</br>";

echo var_export($num) . "</br>";




?>

</head>
<body>
    
</body>
</html>