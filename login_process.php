<?php
require_once("functions/header.php");
require_once("functions/db.php");

$username = $_POST['username'];
$password = $_POST['password'];

$result = mysql_query("SELECT * FROM users WHERE username='$username' AND 
  password = '$password'");
if (!$result) {
	die("Database query failed: " . mysql_error());
}

if (mysql_num_rows($result) == 1) {

	$_SESSION['LOGGED_IN'] = true;
	header("Location: home.php");	
	exit;
}
else {
	$_SESSION['LOGIN_ERROR'] = "bad user name or password.";
	header("Location: login.php");
	exit;
}	
?>

<html>
<head>
<title>processing</title>
</head>
<?php

//	echo $_POST['username'] . "<br>";
	while ($row = mysql_fetch_array($result)) {
//		echo $row["username"] . " ... " . $row["id"];
	$_SESSION['USERNAME'] = $row['username'];
}
?>
<body>
</body>
</html>
<?php
require_once("functions/footer.php");
?>
