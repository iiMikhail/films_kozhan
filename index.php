<?php 
	require_once('config.php');
	require_once('db.php');
	require_once('views/head.tpl');
	$link = db_connect();
	session_start();
	require('models/films.php');
	if ( @$_GET['action'] == 'delete' ) {
		$result = delete_film($link, $_GET['id']);
	} $result = true;
	$film = films_all($link);
	require('views/index.tpl');
	require_once('views/footer.tpl');
?>
