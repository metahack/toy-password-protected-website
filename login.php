<?php
session_start();
if (isset($_SESSION['LOGGED_IN'])) {

	header("Location: home.php");
	exit;
}
?>
<html>
<head>
<link rel="stylesheet" href="main.css">
</head>
<body>

<?php
if (isset($_SESSION['LOGIN_ERROR'])) {
	echo $_SESSION['LOGIN_ERROR'] . "<br>";
//	unset($_SESSION['LOGIN_ERROR']);
	
}
?>

<div id="big_show">
<form action="login_process.php" method="post">
Username: <input type = "text" name = "username" value = "" />
<br>
Password: <input type = "text" name = "password" value = "" />
<br>
<input type = "submit" name = "submit" value = "Submit" />
</form>
</div>

</body>
</html>
