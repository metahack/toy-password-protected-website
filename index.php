<?php
require_once("functions/header.php");
require_once("functions/db.php");
$_SESSION['name'] = "TEST...";
if (isset($_SESSION['LOGGED_IN'])) {
	header('Location: home.php');
	exit;
}

$result = mysql_query("Select * from users", $connection);
if (!$result) {
	die("Database query failed: " . mysql_error());
}
/*
$result_2 = mysql_query("update users set visit_count=visit_count+1 where username='busy'", $connection);
if (!$result_2) {
	die("Database query failed: " . mysql_error());
}
*/
?>
<html>
<head>
<title>index</title>
</head>
<body>
hi!

<a href="login.php">Log in!</a>

<?php

$var = 2;	
if (mysql_num_rows($result) == $var) {

	echo "<br> row count = $var.<br>";
}
else {

	echo "<br> row count is NOT $var.<br>";
}
?>

<table>

<?php
	while($row = mysql_fetch_array($result)) {
		echo $row["id"] . " " . $row["username"] . " " . $row["join_date"];
}
?>
</table>
</body>
</html>

<?php 
require_once("functions/footer.php");
?>
