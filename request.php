<?php 
	require_once('config.php');
	require_once('db.php');
	require_once('views/head.tpl');
	$link = db_connect();
	include('request.tpl');
?>
<?php require_once('views/footer.tpl') ?>