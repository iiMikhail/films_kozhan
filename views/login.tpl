<div class="container user-content section-page">

	<div class="panel-holder mt-80 mb-40">
		<div class="title-3 mt-0">Вход для администратора</div>
		<form action="./login.php" method="POST">
			<div id="error" class="notify notify--error mb-20">Логин не может быть пустым</div>
			<div id="error" class="notify notify--error err-type mb-20">Пароль не может быть пустым</div>
			<div class="form-group">
				<label class="label">Логин<input class="input film-name film-title" name="user-name" type="text" placeholder="Введите логин" />
				</label>
			</div>
			<div class="form-group">
					<div class="form-group"><label class="label">Пароль<input class="input film-type" name="user-password" type="password" placeholder="Введите пароль" /></label></div>
			</div>
			<input class="button" type="submit" name="enter" value="Войти" />
		</form>
	</div>
</div>