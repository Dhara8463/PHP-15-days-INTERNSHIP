<?php

echo "<h1>Harmonic Series</h1> </br>";
$i=1;
$s=0;
$n=3;
while($i<=$n)
{
    $s=$s+(1/$i);
    $i++;
}
echo "value is $s";
?>



