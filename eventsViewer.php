<?php
include "connect.php";
$query = "SELECT * FROM events ORDER BY 'asc'";
$result = mysql_query($query) or die('Error, query failed');
if(mysql_num_rows($result) == 0)
{
echo "Database is empty <br>";
} 
else
{
echo "<table border=1><tr><th>ID</th><th>Date</th><th>News</th><th>Description</th></tr>";
while($row = mysql_fetch_array($result))
{
   echo "<tr><td>";
    echo $row['id'];
    echo "</td><td>";
    echo $row['date'];
    echo "</td><td>";
    echo $row['news'];
    echo "</td><td>";
    echo $row['des'];
    echo "</td></tr>";
}
    echo "</table>";
}
?>