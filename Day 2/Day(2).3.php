<html>
<head><title>Marks</title></head>
<body>
<?php
$g= 15;
$m= 70;
$ss= 40;
$h= 69;
$e= 59;
$tot=$g+$m+$ss+$h+$e;
$avg=$tot/5;
if($avg>70)
{
	
	echo " Distinction " ;
}
else
{
 	if($avg>60)
	echo "First class";
	else
	{
		if($avg>50)
		echo "Second class";
		else
		{ 
			if($avg>40)
			echo "Pass";
			else
 			echo "fail";
		}
	}
}
?>
</body>
</html>
