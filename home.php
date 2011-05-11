<?php

session_start();

if (!isset($_SESSION['LOGGED_IN'])) {

	header("Location: index.php");
	exit;
}
?>
<html>
<head>

<link rel="stylesheet" href="main.css">
</head>
<body>

<div id="header">welcome to bigbeak</div>

<a href="logout.php">
<div id="left">
log out
</div>
</a>

<div id="big_show">
<?php
echo $_SESSION['USERNAME'];
echo "Home!!!";
?>
</div>

</body>
</html>
