<?php

$connection =  mysql_connect("localhost", "bigbeak_user_5", "xxxxxx");
if (!$connection) {
        die("<br>Database connection failed: " . mysql_error());
}     

$db_select = mysql_select_db("bigbeak", $connection);
if (!$db_select) { 
        die("<br>Database selection failed: " . mysql_error());
}  

?>
