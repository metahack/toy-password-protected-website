<?php

include_once("config.php");

$connection =  mysql_connect($sql_host, $sql_user, $sql_user_password);
if (!$connection) {
        die("<br>Database connection failed: " . mysql_error());
}     

$db_select = mysql_select_db($sql_database, $connection);
if (!$db_select) { 
        die("<br>Database selection failed: " . mysql_error());
}  

?>
