<html>
<head><title>Palindrome</title></head>
<body>
<?php
function palindrome($string) {
	if(strrev($string)==$string) {
	 	return 1;
	}
	else {
     		return 0;
	}
}
$number = "121" ;
if(palindrome($number)) {
 	echo"palindrome";
}
else{
 	echo"Not a palindrome";
}
?>
</body>
</html>