<?php
ob_start();
session_start();
include 'connect.php';
//checks login details 
$email = $_POST['email'];
$password = $_POST['password'];
//echo $email;
//echo $password;

$sql="SELECT * FROM $tbl_name WHERE email='$email' and password='$password'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);

// If result matched $myusername and $mypassword, table row must be 1 row
if($count==1){

// Register $myusername, $mypassword and redirect to file "login_success.php"

$_SESSION['email'] = $email;
//$_SESSION['password'] = $password;
    //echo working;
header("location:checklogin.php");
}
else {
echo "Wrong Username or Password";
}
?>