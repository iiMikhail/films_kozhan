<?php 
	require_once('config.php');
	require_once('db.php');
	require('models/films.php');
	$link = db_connect();
	
	if ( isset($_POST['enter']) ) {
		$userName = $_POST['user-name'];
		$userPassword = $_POST['user-password'];
		$group = 'admin';
		$user = get_user($link, $_POST['user-name'], $_POST['user-password'] );
		if( $user ) { 
				$_SESSION['user'] = $user['user-group'];
				$_SESSION['id'] = $user['id'];
				header('location: /index.php');
		}
		if( isset($_POST['enter']) ) {
			$userName = $_POST['user-name'];
			$userPassword = $_POST['user-password'];
			$exrire = time() + 60*60*24*30;
			setcookie('user-name', $userName, $exrire);
			setcookie('user-password', $userPassword, $exrire);
	}
	}
?>
<?php 
require_once('views/head.tpl');
include('views/login.tpl');
require_once('views/footer.tpl') ?>