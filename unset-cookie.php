<?php
	if( isset($_POST['user-unset']) ) {
		$userName = '';
		$userPassword = '';
		$exrire = time() - 60*60*24*30;
		setcookie('user-name', $userName, $exrire);
		setcookie('user-password', $userPassword, $exrire);
	}
	header('location: /request.php');
?>