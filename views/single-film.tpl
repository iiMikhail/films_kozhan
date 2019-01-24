	<?php
	if( COUNT(@$film) > 0 ) {
		foreach ($film as $key => $value) {?>
			<div class="container user-content section-page">
	<div class="title-1">Фильм <?=$film[$key]['name'] ?></div>
	<div class="card row">
		<div class="col">
			<!-- Постер фильма -->
			<img src="<?=HOST?>films/data/films/iphone360_843649.jpg" alt="<?=$film[$key]['name'] ?>">
			<!-- //Постер фильма -->
		</div>
		<div class="col">
			<!-- Описание фильма -->	
				<div class="col-md-12">
					<h4 class="title-4 mt-0"><?php echo $film[$key]['name'] ?></h4>
					<div class="badge"><?php echo $film[$key]['type'] ?></div>
					<div class="badge"><?php echo $film[$key]['year'] ?></div>
					<div class="user-content">
						<p><?php echo $film[$key]['description'] ?></p>
					</div>
					<a class="button-update" href="edit.php?id=<?=$film[$key]['id']?>">&#9998</a>
					<a class="mt-0 button-delete" href="?action=delete&id=<?=$film[$key]['id']?>">X</a>
			<!-- //Описание фильма -->
		</div>
	</div>
	<div class="row">

		<?php  
		}
		} else {
			echo "Добавьте первый фильм";
		}
	?>
	</div>
</div>