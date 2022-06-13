<?php
$fileContents = file_get_contents("users.php");
$user = $_POST['username'];
$pass = md5($_POST['password']);
$npass = md5($_POST['newpassword']);
$search = array($user, $pass);
$replace = array($user, $npass);
$newContents = str_replace($search, $replace, $fileContents);
$handle = fopen("users.php","w");
fwrite($handle, $newContents);
fclose($handle);
echo "'password reset succesfully'<br>";
echo "<a href='login.php'>Login!</a>";

?>