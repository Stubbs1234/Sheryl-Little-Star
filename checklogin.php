<?php
ob_start();
session_start();
include "connect.php";
error_reporting(E_ALL);
$id1 = $_SESSION["email"];
		 $query = mysql_query("SELECT * FROM $tbl_name WHERE email ='$id1'");

    // fetch the result / convert resulte in to array 

    WHILE ($rows = mysql_fetch_array($query)):

       $admin = $rows['userType'];
        
       endwhile;
	$_SESSION['adminTypeiD'] = $admin;
if ($admin == '1'){
header('location:admin.php');
}else if ($admin == '2'){
header('location:customer.php');
}
else {
echo "Sorry you have not been allowed access to the system";
}

?>