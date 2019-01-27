<?php 
	require_once('config.php');
	require_once('db.php');
	require_once('views/head.tpl');
	$link = db_connect();
	include('views/login.tpl');
	if ( isset($_POST['enter']) ) {
		$userName = 'Daruma';
		$userPassword = '123';
		if ( $_POST['user-name'] == $userName ) {
			if ( $_POST['user-password'] == $userPassword ) {
				session_start();
				$_SESSION['user'] = 'admin';
				header('location: /films/login.php');
			}
		}
	}
?>
<?php require_once('views/footer.tpl') ?>