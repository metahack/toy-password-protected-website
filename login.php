<?php

session_start();

?>
<html>
<head>
</head>
<body>


<form action="login_process.php" method="post">

Username: <input type = "text" name = "username" value = "" />
<br>
Password: <input type = "text" name = "password" value = "" />
<br>
<input type = "submit" name = "submit" value = "Submit" />
</form>

</body>
</html>
