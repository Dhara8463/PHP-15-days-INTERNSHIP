<?php

//keysort ksort()
$arr = array(
    "Watermelon" => "Green",
    "Cherry" => "Red",
    "Mango" => "Orange");
 ksort($arr);
 foreach ($arr as $key => $value) {
     echo "<br />$key-$value";
  }  
  echo "</br>";
  //array_change_key_case()
  
  $uppercase = array_change_key_case($arr,CASE_UPPER) ;
  echo "<pre>";
  print_r($uppercase);
  echo "<br/>";
  
  //key reverse sort
  krsort($arr);
  echo"<pre>";
  foreach ($arr as $key => $value){
       echo "<br />$key-$value";
  }
  echo "<br/>";
  
  
  ?>
