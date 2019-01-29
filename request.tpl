<div class="container user-content section-page">
	<div class="panel-holder mt-80 mb-40">
		<div class="title-3 mt-0">Введите логин и город</div>
		<form action="set-cookie.php" method="POST">
			<div id="error" class="notify notify--error mb-20">Логин не может быть пустым</div>
			<div id="error" class="notify notify--error err-type mb-20">Город не может быть пустым</div>
			<div class="form-group">
				<label class="label">Имя<input class="input film-name film-title" name="user-name" type="text" placeholder="Введите ваше имя" />
				</label>
			</div> 
			<div class="form-group">
					<div class="form-group"><label class="label">Город<input class="input film-type" name="user-password" type="text" placeholder="Введите город" /></label></div>
			</div>
			<input class="button" type="submit" name="user-set" value="Обновить" />
		</form>
		<form action="./unset-cookie.php" method="POST">
			<input id="unset" type="submit" name="user-unset" value="Удалить" />
		</form>
	</div>
</div>