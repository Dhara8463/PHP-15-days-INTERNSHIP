<?php

$connection = mysqli_connect("localhost","root","","db_intern");

if(!isset($_GET['id']) || empty($_GET['id'])){
    header("location:3-table.php");
}

$editid = $_GET['id'];


$editq = mysqli_query($connection, "select * from tbl_user where user_id='{$editid}' " ) or die(mysqli_error($connection));

$editdata = mysqli_fetch_array($editq);


if($_POST){
    $txt1 = $_POST['txt1'];
    $txt2 = $_POST['txt2'];
    $txt3 = $_POST['txt3'];

    $uq = mysqli_query($connection,"update tbl_user set user_name='{$txt1}', user_gender='{$txt2}',user_mobile='{$txt3}' where user_id='{$editid}'") or die("Error".mysqli_error($connection));
    
    if($uq){
        echo "<script>alert('Record Updated'); window.location='3-table.php; </script>";
    }
}
?>
<html>
    <body>
        <form method="post">
            Name :<input type="text" value="<?php echo $editdata['user_name']; ?>" name="txt1" /> </br> </br>
            Gender:Male<input type="radio" <?php if($editdata['user_gender']=="Male"){echo "checked" ;} ?> value="Male" name="txt2" />
                Female<input type="radio" <?php if($editdata['user_gender']=="Female"){echo "checked" ;} ?> value="Female" name="txt2" />
            </br> </br>
            Mobile:<input type="number"value="<?php echo $editdata['user_mobile']; ?>" name="txt3" /></br> </br>
        <input type="Submit" />
        </form>
        
    </body>  
  
</html>
