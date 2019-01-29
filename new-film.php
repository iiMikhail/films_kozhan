<?php 
	require_once('config.php');
	require_once('db.php');
	$link = db_connect();
	
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
<?php 
require_once('views/head.tpl');
include('views/add-film.tpl');
require_once('views/footer.tpl') ?>