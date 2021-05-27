<?php
echo "<h4>Even odd Program</h4>";
echo "<br>";
echo"<table border='1'>";
for($i=1;$i<=10;$i++)
{
	echo"<tr>";
	if($i%2==0)
	{
		echo "<td bgcolor='blue'>$i</td>";
	}
	else
	{
		echo "<td bgcolor='red'>$i</td>";
	}
	echo"</tr>";

}
echo"</table>";
?>