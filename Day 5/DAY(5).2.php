<?php

//count()
$arr = array('php','c','Java','Android','Python');
echo count($arr);
echo "<br/>";

//array_reverse()
$revarr = array_reverse($arr);
echo "<pre>";
print_r($revarr);
echo "<br/>";

//in_array()
$temp = in_array('Java',$arr);
echo $temp;
echo "<br/>";

//array_rand()
$indexofarray = array_rand($arr,2);
foreach ($indexofarray as $key => $value) {
    echo "<br />$key -<strong>" .$arr[$value] ."</strong>";
} 
?>