<?php
include "connect.php";
mysql_query("INSERT INTO $tbl2_name (date, news, des) VALUES ('$_POST[date]','$_POST[news]','$_POST[des]')")
        or die (mysql_error());?>