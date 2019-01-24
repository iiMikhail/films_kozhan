<div class="container user-content section-page">
	<div class="panel-holder mt-80 mb-40">
		<div class="title-3 mt-0">Добавить фильм</div>
		<form action="./new-film.php" method="POST">
			<div id="error" class="notify notify--error mb-20">Название фильма не может быть пустым.</div>
			<div id="error" class="notify notify--error err-type mb-20">Жанр не может быть пустым.</div>
			<div id="error" class="notify notify--error err-year mb-20">Год не может быть пустым.</div>
			<div class="form-group"><label class="label">Название фильма<input class="input film-name film-title" name="title" type="text" placeholder="Например - Мстители" /></label></div>
			<div class="row">
				<div class="col">
					<div class="form-group"><label class="label">Жанр<input class="input film-type" name="genre" type="text" placeholder="Например - Комедия" /></label></div>
				</div>
				<div class="col">
					<div class="form-group"><label class="label">Год<input class="input  film-year" name="year" type="text" placeholder="Например - 2000" /></label></div>
				</div>
			</div>
			<textarea class="textarea mb-30" name="description" placeholder="Введите описание фильма"></textarea>
			<input class="button" type="submit" name="newFilm" value="Добавить" />
		</form>
	</div>
</div>