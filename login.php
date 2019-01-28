<?php 
	require_once('config.php');
	require_once('db.php');
	require_once('views/head.tpl');
	require('models/films.php');
	$link = db_connect();
	include('views/login.tpl');
	if ( isset($_POST['enter']) ) {
		$userName = $_POST['user-name'];
		$userPassword = $_POST['user-password'];
		$group = 'admin';
		$user = get_user($link, $_POST['user-name'], $_POST['user-password'] );
		if( $user ) {
			if ( $user['user-group'] == $group ) {
				session_start();
				$_SESSION['user'] = $user['user-group'];
				header('location: /films/index.php');
			}	
		}
	}
?>
<?php require_once('views/footer.tpl') ?>