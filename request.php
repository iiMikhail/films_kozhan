<?php 
	require_once('config.php');
	require_once('db.php');
	require_once('views/head.tpl');
	$link = db_connect();
	include('request.tpl');
	session_start();
?>
<?php require_once('views/footer.tpl') ?>