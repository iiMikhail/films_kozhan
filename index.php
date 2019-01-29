<?php 
	require_once('config.php');
	require_once('db.php');
	$link = db_connect();
	require('models/films.php');
	if ( @$_GET['action'] == 'delete' ) {
		$result = delete_film($link, $_GET['id']);
	} $result = true;
	$film = films_all($link);
	require_once('views/head.tpl');
	require('views/index.tpl');
	require_once('views/footer.tpl');
?>
