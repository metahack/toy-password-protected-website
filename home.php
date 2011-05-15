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

<div id="header">Welcome, Friend!</div>

<a href="logout.php">
<div id="right">
log out
</div>
</a>

<div id="big_show">
<?php
echo "The secret word is \"Rutabaga\".<br>";
?>
</div>

</body>
</html>
