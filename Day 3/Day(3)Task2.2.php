<?php

$a=$_POST['txt1'];
$b=$_POST['txt2'];
$c=$_POST['txt3'];
$d=$_POST['txt4'];
$e=$_POST['txt5'];


$tot=$a+$b+$c+$d+$e;
echo "Total is $tot </br>";

$per=($tot)*20/100;
echo "Percentage is $per </br>";

if($per>70)
{
                echo '<p style="color:yellow;font-size:30px;">Distinction</p> ' ; 
       
}
else
{
 	if($per>60)
        {
        
	echo '<p style="color:blue;font-size:30px;">First class  </p>';
        }
        else
	{
		if($per>50) {
               
		echo '<p style="color:green;font-size:30px;">Second class</p>' ;
                }
		else
		{ 
			if($per>40) {
                        
			echo '<p style="color:red;font-size:30px;">Pass</p>';
                        }
			else {
                        
 			echo '<p style="color:grey;font-size:30px;">fail</p>';
                        }
		}
	}
}
?>