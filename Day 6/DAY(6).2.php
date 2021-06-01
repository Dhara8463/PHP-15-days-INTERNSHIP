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
            "insert into tbl_st(st_name,st_gender,st_dob,st_email,st_mobile,st_address,st_password,st_area,st_pincode,st_country)"
            . " values('$name' ,'$gender','$dob','$email','$mobile','$address','$password','$area','$pincode','$country')")
            or die("Error".mysqli_error($connection));
    if($q){
        echo "<script>Alert('Record Insert'); </script>";
    }
}

?>

<html>
    <body>
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
        
    </body>  
  
</html>