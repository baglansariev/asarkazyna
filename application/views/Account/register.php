<div class="row">
	<div class="register-form">
		<p class="title">
			Регистрация
		</p>
		<i><?= $message ?></i>
		<form method="post">
			<div class="fields">
				<p>Логин: <i class="register-message"></i><input name="reg-login" type="text" required></p>
				<p>Пароль: <i class="register-message"></i><input name="reg-password" type="text" required></p>
				<p>Подтверждение пароля: <input name="reg-confirm" type="text" required></p>
			</div>
			<input type="submit" value="Зарегистрировать">
		</form>
	</div>
</div>