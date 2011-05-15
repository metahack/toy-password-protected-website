<?php
require_once("functions/header.php");
require_once("functions/db.php");

$username = $_POST['username'];
$password = sha1($_POST['password']);

$result = mysql_query("SELECT * FROM $sql_table WHERE username='$username' AND 
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
	$_SESSION['LOGIN_ERROR'] = "Bad user name or password.";
	header("Location: login.php");
	exit;
}	
?>

<html>
<head>
<title>processing</title>
</head>
<?php
	while ($row = mysql_fetch_array($result)) {
		$_SESSION['USERNAME'] = $row['username'];
}
?>
<body>
</body>
</html>
<?php
require_once("functions/footer.php");
?>
