<?php 
	require_once('config.php');
	require_once('db.php');
	require_once('views/head.tpl');
	$link = db_connect();
	include('views/login.tpl');
	if ( isset($_POST['enter']) ) {
		$userName = $_POST['user-name'];
		$userPassword = $_POST['user-password'];
		$group = 'admin';
		// if ( $_POST['user-name'] == $userName ) {
		// 	if ( $_POST['user-password'] == $userPassword ) {
		// 		session_start();
		// 		$_SESSION['user'] = 'admin';
		// 		header('location: /films/login.php');
		// 	}
		// }
		$login = "SELECT * FROM users WHERE name = '" . $userName . "'";
		mysqli_query($link, $login);
		if( mysqli_affected_rows($link) == 1 ) {
			$password = "SELECT * FROM `users` WHERE `name` = '" . $userPassword . "'";
			mysqli_query($link, $password);
			if ( mysqli_affected_rows($link) == 1 ) {
				session_start();
				$_SESSION['user'] = 'admin';
				header('location: /films/login.php');

			}
		}
	}
?>
<?php require_once('views/footer.tpl') ?>