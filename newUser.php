<html><head>
    <body>
    <script type="text/javascript">
        function back() {
            window.history.back();

        }
        </script>
    </body>
    </head></html>
<!--PHP Starts-->
    <?php 
    //connect to the database using the connect.php
    require 'connect.php';
 $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    $uplPass = implode($pass); //turn the array into a string       

//insert data into table
        mysql_query("INSERT INTO $tbl_name (email, password, userType, firstname, lastname, childsName) VALUES ('$_POST[email]','$uplPass','$_POST[user]','$_POST[firstname]','$_POST[lastname]', '$_POST[name]')")
        or die (mysql_error());
        echo "<button onclick='back();'>Back</button>";
    ?>