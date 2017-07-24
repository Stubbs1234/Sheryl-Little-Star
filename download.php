<?php
include 'connect.php';
$id    = $_GET['id'];
    $query = "SELECT * FROM bills WHERE id = '$id'";

$result = mysql_query($query) or die('Error, query failed');
list($name, $type, $size, $content) = mysql_fetch_array($result);
header("Content-length: $size");
header("Content-type: $type");
header("Content-Disposition: attachment; filename=$name");
echo $content;
exit;
?>