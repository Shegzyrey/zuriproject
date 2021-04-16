<?php
session_start();


function userfile($filename){
$lines = file($filename);
$config = array();
for($i = 1; $i < count($lines); ++$i)
$config[substr($lines[$i], 0, strpos($lines[$i], ':'))] = substr($lines[$i], strpos($lines[$i], ':') + 1, -1); // -2 for a Windows host
return $config;
}
if(isset($_GET['logout'])){
unset($_SESSION['logged']);
}
//print_r(newfile('users.php'));
$users = userfile('users.php');
//echo $test['test1'];
$username = $_POST['username'];
$password = $_POST['password'];
list($pass,$email) = explode(',', $users[$username]);
if(isset($users[$username]) && md5($password) == $pass){

$_SESSION['logged'] = $username;
echo 'Hello you are registered.<br>';
echo 'Click <a href="somepage.php">here</a> to go to some other page.<br>';
echo 'Click <a href="logout.php?logout=true">here</a> to logout.<br>';
echo 'Your email address is '.$email;
} elseif(!isset($users[$username]) && md5($password) != $users[$username]) {
echo 'Username or password Incorrect';
}
if(isset($_SESSION['logged'])){
echo '<br>test';
}
?>
