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
<link rel="stylesheet" href="main.css">
</head>
<body>

<div id="header">
welcome to bigbeak

</div>
<a href="login.php">
<div id="left">
log in!
</div>
</a>


<div id="big_show">
Hi!

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

</div>

</body>
</html>

<?php 
require_once("functions/footer.php");
?>
