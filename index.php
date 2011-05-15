<?php
require_once("functions/header.php");
require_once("functions/db.php");

if (isset($_SESSION['LOGGED_IN']) && $_SESSION['LOGGED_IN'] == true) {
	header('Location: home.php');
	exit;
}
?>
<html>
<head><title>index</title><link rel="stylesheet" href="css/main.css"></head>
<body>

<div id="header">Howdy, Stranger!</div>

<a href="login.php">
<div id="right">log in!</div>
</a>

<div id="big_show">Hi!</div>

</body>
</html>

<?php 
require_once("functions/footer.php");
?>
