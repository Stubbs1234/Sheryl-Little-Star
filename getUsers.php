<?php
require "connect.php";

$sql = "SELECT * FROM $tbl_name";
$results = mysql_query($sql) or die("Sorry not working at the minute");
echo "<table border=1><tr><th>ID</th><th>Email</th><th>User Type</th><th>First Name</th><th>Last Name</th></tr>";
while ($row = mysql_fetch_array($results)) {
    echo "<tr><td>";
    echo $row['id'];
    echo "</td><td>";
    echo $row['email'];
    echo "</td><td>";
    echo $row['userType'];
    echo "</td><td>";
    echo $row['firstname'];
    echo "</td><td>";
    echo $row['lastname'];
    echo "</td></tr>";
}
echo "</table>";
?>