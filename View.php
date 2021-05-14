<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="container">
<?php
define('pi',3.14);

$a = 12;
$b = 10;
$v = "hhhhhhhh";

echo  $a + $b;
echo "<h1 style="color:"red"">happy hour</h1>";
echo var_dump($a==$b); //boolean value return 
echo "<br>";
echo $a++;
echo "<br>";
echo ++$a;
echo "<br>";
echo var_dump($a xor $b);

// datatypes in php

$car = [1,3,4];
echo var_dump($car);
echo "<br>";
echo $car[0];
foreach ($car as $value) {
    # code...
    echo "<br>";
    echo $value;
}
echo count($car);
echo "the number od words are".strlen($v);

echo "<br>";
echo pi;

function get(){
    
}

?>

</div>
    
</body>
</html>