<html>
<head><title>Convert into meter,feet,inches,centimeters</title></head>
<body>
<?php
 $km=22;
 $me;
 $fe;
 $inc;
 $cen;

 $me=$km*1000;
 $fe=$me*3.33;
 $inc=$fe*12;
 $cen=$me*100;

 echo " me is $me </br>";
 echo " fe is $fe </br>";
 echo " inc is $inc </br>"; 
 echo " cen is $cen </br>";

 ?>
</body>
</html>