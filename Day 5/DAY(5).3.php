<?php

//array_merge()
$arr1 = array('php','c','Java','Android','Python');
$arr2 = array(90,87,6,57,40);
$newarr = array_merge($arr1,$arr2);
echo "<pre>";
print_r($newarr);
echo "<br/>";

//array_search()
$check = array_search(40,$arr2);
echo $check;
echo "<br/>";

//array_sort()
sort($arr2);
echo "<pre>";
print_r($arr2);
echo "<br/>";

//descending rsort()
rsort($arr2);
print_r($arr2);
echo "<br/>";


?>
