<?php
//ob_start();
//session_start();

include "connect.php";

    $query = "SELECT * FROM bills";

$result = mysql_query($query) or die('Error, query failed');
if(mysql_num_rows($result) == 0)
{
echo "Database is empty <br>";
} 
else
{
echo "<table border=1><tr><th>ID</th><th>File</th><th>User</th><th>Date Issue</th><th>Date Paid</th><th>Total</th></tr>";
while($row = mysql_fetch_array($result))
{
   echo "<tr><td>";
    echo $row['id'];
    echo "</td><td>";
    echo"<a href='download.php?id=".$row['id']."'>".$row['name']."</a>";
    echo "</td><td>";
    echo $row['userID'];
    echo "</td><td>";
    echo $row['dateIssue'];
    echo "</td><td>";
    echo $row['dataPaid'];
    echo "</td><td>";
    echo $row['total'];
    echo "</td></tr>";
}
    echo "</table>";
}
//include 'library/closedb.php';
?>

