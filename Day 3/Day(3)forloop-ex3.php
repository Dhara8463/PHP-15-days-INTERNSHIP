<?php

echo "<h1>FOR LOOP EXAMPLE 3 </h1> </br>";

for($i=1;$i<=16;$i++) 
{
   for($j=1;$j<=$i;$j++)
   {
       echo '*'; 
   }
   echo "</br>";
}
for($i=1;$i<=16;$i++) 
{
   for($j=16;$j>=$i;$j--)
   {
       echo  "*"; 
   }
   echo "</br>";
}
?>