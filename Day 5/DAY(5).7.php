<?php
//Take 5 numbers from user store into array and print asc order and sum of all numbers.

//array_sum()
$arr = array(2,4,6,8,10);
echo array_sum($arr);
echo "<br/>";
echo "<br/>";

//array product
echo array_product($arr);

//asc order
asort($arr);
echo "<pre>";
print_r($arr);

?>