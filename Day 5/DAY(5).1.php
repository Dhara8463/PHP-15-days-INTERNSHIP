<?php
//Associative Array
$a[0] =10;
$a['p'] ="php";
$a['cyber']="Security";
$a[60]=99.5;
$a[4]=4;

foreach ($a as $value) {
    echo"<br> Value is $value ";
}
    echo "</br>" ;
foreach ($a as $key => $value) {
    echo "<br/> key is <b>$key<b> and value is <b>$value<b> " ;
}
    echo "<br/>";
echo "<pre>";
print_r($a);

var_dump($a);
echo "<pre>";


?>

