<?php 
	require_once('config.php');
	require_once('db.php');
	$link = db_connect();
	require('models/films.php');
	
?>
<!-- Скрипт обновления фильма -->
<?php
print_r($_SESSION['id']);
	if ( array_key_exists( 'user-set', $_POST ) ) {
		print_r($_POST);
		if ( $_POST['userName'] == '' ) {
			echo "Необходимо ввести имя пользователя";
		} else {
			$user = get_user($link, $_POST['userName'], $_POST['userCity'] );
		}
	}
	
	$userUpdate = user_update($link, $_SESSION['id'], @$_POST['userName'], @$_POST['userCity'] );
?>

<?php
require_once('views/head.tpl');
require('request.tpl');
require_once('views/footer.tpl') ?>