<?php 
	require_once('config.php');
	require_once('db.php');
	$link = db_connect();
	require('models/films.php');
	if ( @$_GET['action'] == 'delete' ) {
		$result = delete_film($link, $_GET['id']);
	} $result = true;
	$film = films_all($link);
?>
<!-- Скрипт обновления фильма -->
<?php
	if ( array_key_exists( 'update-film', $_POST ) ) {
		if ( $_POST['title'] == '' ) {
			echo "Необходимо ввести название фильма";
		} else { 
			$result = film_update($link, $_POST['title'], $_POST['genre'], $_POST['year'], $_POST['description'], $_GET['id']);
		}
	}
	$film = get_film($link, $_GET['id'] );
?>
<!-- //Скрипт обновления фильма -->
<div class="container user-content section-page">
	<div class="title-1">Фильмотека</div>
	<!-- Обход массива, поиск фильма -->
		<div class="row">
			<?php
			foreach ($film as $key => $value) {?>			
			<?php } ?>
		</div>
	<!-- //Обход массива, поиск фильма -->

	<!-- Форма изменения фильма -->
<?php 
require_once('views/head.tpl');
require_once('views/edit.tpl') ?>
</div>
<?php require_once('views/footer.tpl') ?>