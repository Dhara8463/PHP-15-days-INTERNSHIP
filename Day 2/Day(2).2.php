<html>
<head><title>Largest of three numbers:</title></head>
<body>
<?php
$a=5;
$b=3;
$c=7;
if($a>$b && $a>$c)
{
	echo $a;
}
else 
{
 	if($b>$a && $b>$c)
	{
	echo $b;}
	else
	echo $c;
}
?>
</body>
</html>