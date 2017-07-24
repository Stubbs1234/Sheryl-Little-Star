<?php
$host="localhost";  
$username="root";  
$password="root";
$db_name="sls";  
$tbl_name="users"; 
//$tbl_name1="checkin";
//$tbl_name2="ref"; 

 mysql_connect("$host", "$username", "$password")or die("cannot connect"); 
 mysql_select_db("$db_name")or die("cannot select DB");
 ?>