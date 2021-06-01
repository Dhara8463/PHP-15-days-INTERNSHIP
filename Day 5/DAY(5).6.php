<?php

//explode()
$mystring = "I Love PHP Language";
$arr = explode(" ",$mystring);
echo "<pre>";
print_r($arr);
echo "<br/>";

//implode()
$mystring1 =array("I","Love","PHP","Language");
$arr1 = implode(" ",$mystring1);
echo $arr1;
echo "<br/>";
?>