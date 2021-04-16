<?php
session_start();
function newfile($filename){
$lines = file($filename);
$config = array();
for($i = 1; $i < count($lines); ++$i)
$config[substr($lines[$i], 0, strpos($lines[$i], ':'))] = substr($lines[$i], strpos($lines[$i], ':') + 1, -1); // -2 for a Windows host
return $config;
}
$users = newfile('users.php');
$user = $_POST['username'];
$pass = md5($_POST['password']);
$email = $_POST['email'];
if(isset($user) && isset($pass)){
if(array_key_exists($user, $users)){
echo 'Username Taken';
} else {
$f = fopen('users.php', 'a');
fwrite($f, $user.":".$pass.",".$email."\n");
fclose($f);
echo 'Successfully registered!!! Please click here to login.<br><a href="login.php?login=true">Login</a>';
}
} else {
echo 'No Username or password';
}
?>