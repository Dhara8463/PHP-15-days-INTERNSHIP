<?php

$connection = mysqli_connect("localhost","root","","db_intern");

if($_POST){
    $name=$_POST['txt1'];
    $gender=$_POST['txt2'];
    $dob=$_POST['txt3'];
    $email=$_POST['txt4'];
    $mobile=$_POST['txt5'];
    $address=$_POST['txt6'];
    $password=$_POST['txt7'];
    $area=$_POST['txt8'];
    $pincode=$_POST['txt9'];
    $country=$_POST['txt10'];
    
    
    $q = mysqli_query($connection, 
            "insert into tbl_st1(st1_name,st1_gender,st1_dob,st1_email,st1_mobile,st1_address,st1_password,st1_area,st1_pincode,st1_country)"
            . " values('$name' ,'$gender','$dob','$email','$mobile','$address','$password','$area','$pincode','$country')")
            or die("Error".mysqli_error($connection));
    if($q){
        echo "<script>Alert('Record Insert'); </script>";
    }
}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Dhara Savaliya</title>
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="http://fonts.googleapis.com/css?family=Coda:400,800" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
</head>
<body>

<div id="header-wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="#">tirupati hospital</a></h1>
			
		</div>
	</div>
</div>
<div id="wrapper"> 
	<!-- end #header -->
	<div id="page-bgtop"></div>
	<div id="page">
		<div><img src="images/pics01.jpg" width="920" height="300" alt="" /></div>
		<div id="content">
			<div class="post">
				<h2 class="title"><a href="#">REGISTRATION FORM</a></h2>
				<form method="post">
            Name :<input type="text" name="txt1" required /> </br> </br>
            Gender:<select name="txt2" required>
            <option>Male</option>
            <option>Female</option>
            </select> </br> </br>
            DOB:<input type="date" name="txt3" required/></br> </br>
            Email:<input type="email" name="txt4" required /> </br> </br>
            Mobile:<input type="number" name="txt5" required /></br> </br>
            Address:<input type="text" name="txt6" required /></br> </br>
            Password:<input type="password" name="txt7" required /></br> </br>
            Area:<input type="text" name="txt8" required /></br> </br>
            Pincode:<input type="number" name="txt9" required /></br> </br>
            Country:<select name="txt10" required>
            <option>India</option>
            <option>USA</option>
            <option>London</option>
            <option>Canada</option>
            <option>UK</option>
            </select> </br> </br>
            <input type="Submit" />
        </form>
			</div>
			
			<div style="clear: both;">&nbsp;</div>
		</div>
		<!-- end #content -->
		<div id="sidebar">
			<marquee direction="down" height="500" scrollamount="20">
       
                            Welcome .
  
                        </marquee>		
                
                </div>
		<!-- end #sidebar -->
		<div style="clear: both;">&nbsp;</div>
	</div>
	<div id="page-bgbtm"></div>
	<!-- end #page --> 
</div>
<div id="footer">
	<p>It is managed by Dhara Savaliya</p>
</div>
<!-- end #footer -->
</body>
</html>


