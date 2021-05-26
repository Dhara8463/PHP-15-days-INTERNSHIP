<html>
<head><title>Choose Fav Color using Switch case </title></head>
<body>
<?php
$favcolor = "Blue";

switch($favcolor){
	case "red":
          echo "Your favorite color is red";
          break;
	case "Blue":
	  echo "your favorite color is blue";
	  break;
 	case "green":
  	  echo "your favorite color is green";
	  break;
	default:
	  echo "Your favorite color is neither red,blue,nor green!";
}
?>
</body>
</html>