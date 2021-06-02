<?php
$connection = mysqli_connect("localhost","root","","db_intern");


$id=$_GET['deleteid'];

echo $id;

$q = mysqli_query($connection, "update  tbl_user set is_delete = 1 where user_id='{$id}'")
            or die("Error".mysqli_error($connection));

if($q)
{
    echo"<script>alert('Record Deleted');window.location='3-table.php';</script>";
}