<!DOCTYPE html>

<html lang="ru">
<head>
	<meta charset="UTF-8" />
	<title>Михаил Кожан - Фильмотека</title>
	<meta name="keywords" content="" />
	<meta name="description" content="" />

	<link rel="stylesheet" href="libs/normalize-css/normalize.css" />
	<link rel="stylesheet" href="libs/bootstrap-4-grid/grid.min.css" />

	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/main.css">
</head>
<body class="index-page">
	<div class="container user-content section-page">
		<nav class="nav">
			<?php if ( isset($_SESSION['user']) ) {
				if($_SESSION['user'] =='admin') { ?>
				<a href="./new-film.php" class="mr-30">Добавить фильм</a>
				<a href="./request.php" class="mr-30">Указать информацию</a>
				<?php }
			} ?>
			<?php if ( isset($_SESSION['user']) !== '' ) {?>
				<a href="./request.php" class="mr-30">Указать информацию</a>
				<a href="./logout.php" class="mr-30">Выход</a>
			<?php } ?>
			<a href="./index.php" class="mr-30">Все фильмы</a>

			
			<?php if ( isset($_SESSION['user']) == '' ) { ?>
				<a href="./login.php" class="mr-30">Авторизация</a>
			<?php } ?>
		</nav>
	</div>
	<?php if(isset($_COOKIE['user-name'])){ ?>
	<div class="container user-content section-page">
		Привет, <?=$_COOKIE['user-name']?>
	</div>
	<?php }?>