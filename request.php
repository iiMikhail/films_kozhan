<?php 
	require_once('config.php');
	require_once('db.php');
	require_once('views/head.tpl');
	$link = db_connect();
	require('models/films.php');
	require('request.tpl');
?>
<!-- Скрипт обновления фильма -->
<?php
	if ( array_key_exists( 'user-set', $_POST ) ) {
		if ( $_POST['user-name'] == '' ) {
			echo "Необходимо ввести имя пользователя";
		} else {
			echo "Запрос 1 выполнился";
			$user = get_user($link, $_POST['user-name'], $_POST['user-password'] );
			var_dump($user);
			echo "Запрос 1 выполнился";
			var_dump($user);
		}
		return $user;
		var_dump($user);
	}
	echo "Запрос 2 выполнился";
	
	// $userUpdate = user_update($link, $user['id'], $_POST['userName'], $_POST['userCity'] );
?>
	<!-- Форма изменения фильма -->

</div>
<?php require_once('views/footer.tpl') ?>