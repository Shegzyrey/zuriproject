<?php
session_start();
if(isset($_SESSION['logged'])){
echo 'You are still logged in ';
echo '<br><a href="destroy.php?logout=true">Logout</a>';
} else {
echo 'Please login first';
}
?>