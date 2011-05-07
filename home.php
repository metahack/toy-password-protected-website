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



<div id="login_container">

<div id="login_item">
<a href="logout.php">
log out
</div>
</div>

</a>
<?php
echo $_SESSION['USERNAME'];
echo "Home!!!";
?>
</body>
</html>
