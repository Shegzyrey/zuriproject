<?php
session_start();
?>
<html>
<head>
</head>
<body>
<?php
if(isset($_GET['login'])){
if(isset($_SESSION['logged'])){
echo 'You cannot login in when you are logged in already.';
} else {
?>
<form name="login" method="POST" action="processes.php">
Username: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
<input type="submit"><br>
<a href="?register=true">Please Register Here</a>
<a href="reseth.php"><i>forgot password?</i></a>
</form>
<?php
}
} else if(isset($_GET['register'])){
if(isset($_SESSION['logged'])){
echo 'You cannot register when you are logged in.';
} else {
?>
<form name="login" method="POST" action="register.php">
Username: <input type="text" name="username"><br>
Password: <input type="password" name="password"><br>
Email: <input type="text" name="email"><br>
<input type="submit">
</form>
<?php
}
} else {
if(isset($_SESSION['logged'])){
echo 'You don\'t have any previleges here.';
} else {
?>
Please <a href="?login=true">Login</a><br>
OR<br>
Register <a href="?register=true">here</a>
<?php
}
}
?>
</body>
</html>
