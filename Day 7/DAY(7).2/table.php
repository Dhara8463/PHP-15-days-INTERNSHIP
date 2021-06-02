<?php

$connection = mysqli_connect("localhost","root","","db_intern");

$q = mysqli_query($connection, "select * from tbl_st where is_delete=0 ")
            or die("Error".mysqli_error($connection));

echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>NAME</th>";
echo "<th>GENDER</th>";
echo "<th>DOB</th>";
echo "<th>EMAIL</th>";
echo "<th>MOBILE</th>";
echo "<th>ADDRESS</th>";
echo "<th>PASSWORD</th>";
echo "<th>PINCODE</th>";
echo "<th>COUNTRY</th>";
echo "<th>ACTION</th>";
echo "<tr>";
$i =0;
while($row = mysqli_fetch_array($q)){
    $i++;
    echo "<tr>";
    echo "<td>{$row['st_id']}</td>";
    echo "<td>{$row['st_name']}</td>";
    echo "<td>{$row['st_gender']}</td>";
    echo "<td>{$row['st_dob']}</td>";
    echo "<td>{$row['st_email']}</td>";
    echo "<td>{$row['st_mobile']}</td>";
    echo "<td>{$row['st_address']}</td>";
    echo "<td>{$row['st_password']}</td>";
    echo "<td>{$row['st_area']}</td>";
    echo "<td>{$row['st_pincode']}</td>";
    echo "<td>{$row['st_country']}</td>";

    echo "<td><a href='deleted.php?deleteid={$row['st_id']}'>Delete </a></td>";
    echo "</tr>";
}

echo "</table>";

echo "<a href='DAY(6).2.php'>Add record</a>";