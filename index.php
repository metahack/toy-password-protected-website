<?php
require_once("functions/header.php");
require_once("functions/db.php");

if (isset($_SESSION['LOGGED_IN'])) {
	header('Location: home.php');
	exit;
}
?>
<html>
<head><title>index</title><link rel="stylesheet" href="main.css"></head>
<body>

<div id="header">welcome to bigbeak</div>

<a href="login.php">
<div id="left">log in!</div>
</a>


<div id="big_show">Hi!</div>

</body>
</html>

<?php 
require_once("functions/footer.php");
?>
