<html>
<head><title>Swap the to Variables Without using third variable</title></head>
<body>
<?php
 $c= 6;
 $d= 7;
 
 $c=$c+$d;
 $d=$c-$d;
 $c=$c-$d;
  
 echo "$c </br>";
 echo "$d";
?>
</body>
</html>