<?php 
	require_once('config.php');
	require_once('db.php');
	require_once('views/head.tpl');
	$link = db_connect();
	require('models/films.php');
	session_start();
	if ( @$_GET['action'] == 'delete' ) {
		$result = delete_film($link, $_GET['id']);
	} $result = true;
	$film = get_film($link, $_GET['id'] );
	require('views/single-film.tpl');
	require_once('views/footer.tpl');
?>
