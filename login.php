<?php
session_start();
if (isset($_SESSION['LOGGED_IN'])) {

	header("Location: home.php");
	exit;
}
?>
<html>
<head>
<link rel="stylesheet" href="css/main.css">
</head>
<body>

<?php
if (isset($_SESSION['LOGIN_ERROR'])) {
	echo "<div id='error'>";
	echo $_SESSION['LOGIN_ERROR'] . "<br>";
	echo "</div>";
}
?>

<div id="big_show">
<form action="login_process.php" method="post">
<span id="login">
Login : 
<input type = "text" name = "username" value = "" />
</span><br><br>
<span id="login">
Password : <input type = "text" name = "password" value = "" />
</span><br><br>
<input type = "submit" name = "submit" value = "Submit" />
<br>
</form>
</div>
</body>
</html>
