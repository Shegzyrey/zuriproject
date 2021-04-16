<?php
session_start();
?>
<html>
<head>
</head>
<body>
    <form name="reset" method="POST" action="reset.php">
    Username: <input type="text" name="username"><br>
    OldPassword:<input type="password" name="password"><br>
    Password: <input type="password" name="newpassword"><br>
    <input type="submit"><br>
    </form>
</body>
</html>