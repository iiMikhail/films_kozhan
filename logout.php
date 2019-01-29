<?php 
session_start();
unset($_SESSION['user']);
session_destroy();
$userName = '';
$userPassword = '';
$exrire = time() - 60*60*24*30;
setcookie('user-name', $userName, $exrire);
setcookie('user-password', $userPassword, $exrire);
header('location: /login.php');
?>