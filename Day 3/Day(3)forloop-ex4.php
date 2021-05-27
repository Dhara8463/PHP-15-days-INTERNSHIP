<?php

echo "<h1>FOR LOOP EXAMPLE 4 </h1> </br>";

for($i=1;$i<=9;$i++) 
{
   for($j=1;$j<=$i;$j++)
   {
       echo '*'; 
   }
   for($s=9;$s>$i;$s--)
   {
       echo "  ";
   }
   for($j=1;$j<=$i;$j++)
   {
       echo"*";
   }
   echo"</br>";

}
for($i=1;$i<=9;$i++) 
{
    for($j=9;$j>$i;$j--)
    {
        echo "*";
       
    }
    for($s=1;$s<=$i;$s++)
    {
        echo "  ";
    }
    for($j=9;$j>$i;$j--)
    {
       echo  "*"; 
    } 
    echo "</br>";
}
?>