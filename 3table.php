<?php
//DB connection
$connection = mysqli_connect("localhost","root", "","db_internship");
//Query
$q = mysqli_query($connection, "select * from tbl_user")  or die(mysqli_error($connection));

echo "<table border = 1>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>NAME</th>";
echo "<th>GENDER</th>";
echo "<th>MOBILE</th>";
while($row = mysqli_fetch_array($q)){
    echo "<tr>";
    echo "<td>{$row['user_id']}</td>";
    echo "<td>{$row['user_name']}</td>";
    echo "<td>{$row['user_gender']}</td>";
    echo "<td>{$row['user_mobile']}</td>";
    echo "<td><a href = 'delete.php?deleteid=user_id'>Delete</a></td>";
    echo "</tr>";
}
echo "</table>";

echo "<a href= 'fetch.php'></a> ";