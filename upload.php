<html><head>
    <body>
    <script type="text/javascript">
        function back() {
            window.history.back();

        }
        </script>
    </body>
    </head></html>
<?php
$dateIssuse = date("Y/m/d");
$userID = $_POST['owner'];
$total = $_POST['total'];
  if(isset($_POST['upload']) && $_FILES['userfile']['size'] > 0)
{
$fileName = $_FILES['userfile']['name'];
$tmpName  = $_FILES['userfile']['tmp_name'];
$fileSize = $_FILES['userfile']['size'];
$fileType = $_FILES['userfile']['type'];

$fp      = fopen($tmpName, 'r');
$content = fread($fp, filesize($tmpName));
$content = addslashes($content);
fclose($fp);

if(!get_magic_quotes_gpc())
{
    $fileName = addslashes($fileName);
}

//include 'library/config.php';
//include 'library/opendb.php';
include "connect.php";

$query = "INSERT INTO bills (name, size, type, content, userID, dateIssue, total) ".
"VALUES ('$fileName', '$fileSize', '$fileType', '$content', '$userID', '$dateIssuse', '$total')";

mysql_query($query) or die('Error, query failed'); 
//include 'library/closedb.php';

        echo "<button onclick='back();'>Back</button>";
} 
?>

