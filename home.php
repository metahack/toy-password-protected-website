<?php

session_start();

if (!isset($_SESSION['LOGGED_IN'])) {


	header("Location: index.php");
	exit;
}
echo "<br><a href=\"logout.php\">log out<br></ a>";
echo $_SESSION['USERNAME'];
echo "Home!!!";
?>
