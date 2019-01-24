<div class="panel-holder mt-80 mb-40">
	<div class="title-3 mt-0">Изменить фильм <?php echo $film[$key]['name'] ?></div>
	<form enctype="multipart/form-data" action="edit.php?id=<?=$film[$key]['id'] ?>" method="POST">
		<!-- Валидация -->
		<div id="error" class="notify notify--error mb-20">Название фильма не может быть пустым.</div>
		<div id="error" class="notify notify--error err-type mb-20">Жанр не может быть пустым.</div>
		<div id="error" class="notify notify--error err-year mb-20">Год не может быть пустым.</div>
		<!-- //Валидация -->
		<div class="form-group"><label class="label">Название фильма
			<input class="input film-name film-title" name="title" type="text" placeholder="Например - Мстители" value = "<?php echo $film[$key]['name'] ?>"/>
		</label>
		</div>
		<div class="row">
			<div class="col">
				<div class="form-group"><label class="label">Жанр
					<input class="input film-type" name="genre" type="text" placeholder="Например - Комедия" value = "<?php echo $film[$key]['type'] ?>"/></label></div>
			</div>
			<div class="col">
				<div class="form-group"><label class="label">Год
					<input class="input  film-year" name="year" type="text" placeholder="Например - 2000" value = "<?php echo $film[$key]['year'] ?>"/></label>
				</div>
			</div>
		</div>
		<textarea class="textarea mb-30" name="description" placeholder="Введите описание фильма"><?php echo $film[$key]['description'] ?></textarea>
		<div class="mb-20">
			<input type="file" name="photo" value = "<?php echo $film[$key]['photo'] ?>">

		</div>
		<input class="button" type="submit" name="update-film" value="Обновить" />
		<a href="index.php">Вернуться на главную</a>
	</form>
</div>