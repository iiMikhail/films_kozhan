<?php
	if( isset($_POST['user-set']) ) {
		$userName = $_POST['user-name'];
		$userPassword = $_POST['user-password'];
		$exrire = time() + 60*60*24*30;
		setcookie('user-name', $userName, $exrire);
		setcookie('user-password', $userPassword, $exrire);
	}
	header('location: /films/request.php');
?>