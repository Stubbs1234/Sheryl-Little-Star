<?php 
//check php is running 
//echo "PHP is running on this server<br/>";

//Establish a connection to the database using the correct log in details
/*$host="localhost";  
$id="root";  
$password="root";
$db="sls";  
$tbl_name="users"; 
$tbl2_name="events";*/

$host = "localhost";
$id = "h121944";
$password = "Cheese55";
$db = "h121944_sls";
$tbl_name="users"; 

$connection = @mysql_connect($host, $id, $password) or die ('Server connection problem:'.mysql_error());

$dbconnect =@mysql_select_db($db) or die ('Database connection promble:'.mysql_error());
?>