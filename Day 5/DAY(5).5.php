<?php

//array difference
$a=array("c","c++","java","php","Android");
$b=array("c","java","php","python");
$diff= array_diff($b, $a);
echo "<pre>";
print_r($diff);
echo "<br/>";

//array intersect
echo "<pre>";
print_r(array_intersect($a, $b));
echo "</br>";

//array values
$myarr= array_values($b);
foreach ($b as $key => $value) {
    echo "<br/>$key - $value";
}
echo "</br>";

//array push
array_push($b,"C++",".net");
echo "<pre>";
print_r($b);
echo "<br/>";

//array pop
array_pop($a);
echo "<pre>";
print_r($a);
echo "<br/>";
?>