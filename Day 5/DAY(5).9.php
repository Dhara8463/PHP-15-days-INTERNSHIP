<?php

//shuffle

$arr = array("c","c++","java","Php","python",".net","Android");
shuffle($arr);
foreach ($arr as $key => $value) {
    echo "<br/> $value ";
}

?>