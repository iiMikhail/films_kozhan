<?php 
	require_once('config.php');
	require_once('db.php');
	require_once('views/head.tpl');
	$link = db_connect();
	include('views/add-film.tpl');
	require('models/films.php');
	if ( array_key_exists( 'newFilm', $_POST ) ) {
		if ( $_POST['title'] == '' ) {
			echo "Необходимо ввести название фильма";
		} else {
			echo "Фильм добавлен";
			$result = new_film($link, $_POST['title'], $_POST['genre'], $_POST['year'], $_POST['description']);
		}
	}
?>
<?php require_once('views/footer.tpl') ?>