<div class="container user-content section-page">
	<div class="title-1">Фильмотека</div>
	<div class="row">
	<?php
	if( COUNT(@$film) > 0 ) {
		foreach ($film as $key => $value) {?>
		<a href="single.php?id=<?=$film[$key]['id']?>">	
			<div class="card mb-20 col-md-3">
				<img height="200px" src="<?=HOST?>films/data/films/iphone360_843649.jpg" alt="">
				<h4 class="title-4"><?php echo $film[$key]['name'] ?></h4>
				<div class="badge"><?php echo $film[$key]['type'] ?></div>
				<div class="badge"><?php echo $film[$key]['year'] ?></div>	
				<a class="button-update" href="edit.php?id=<?=$film[$key]['id']?>">&#9998</a>
				<a class="button-delete" href="?action=delete&id=<?=$film[$key]['id']?>">X</a>
			</div>
		</a>
		<?php  
		}
		} else {
			echo "Добавьте первый фильм";
		}
	?>
	</div>
</div>