<?php

$connection = mysqli_connect("localhost","root","","db_intern");

$q = mysqli_query($connection, "select * from tbl_user where is_delete=0 ")
            or die("Error".mysqli_error($connection));

echo "<table border='1'>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>NAME</th>";
echo "<th>GENDER</th>";
echo "<th>MOBILE</th>";
echo "<th>ACTION</th>";
echo "<tr>";
$i =0;
while($row = mysqli_fetch_array($q)){
    $i++;
    echo "<tr>";
    echo "<td>{$row['user_id']}</td>";
    echo "<td>{$row['user_name']}</td>";
    echo "<td>{$row['user_gender']}</td>";
    echo "<td>{$row['user_mobile']}</td>";
    echo "<td><a href='delete.php?deleteid={$row['user_id']}'>Delete </a></td>";
    echo "</tr>";
}

echo "</table>";

echo "<a href='DAY(6).1.php'>Add record</a>";