<?php include('header.php'); ?>

<section class="page-title">
	<h1 class="page-title__name">Вход</h1>
</section>

<section class="registr-sec">
	<form action="#">
		<div class="input-group">
			<label>E-mail *</label>
			<input type="email" name="XXX" class="error">
		</div>
		<div class="input-group">
			<label>Пароль *</label>
			<input type="password" name="XXX">
		</div>
		<button type="submit" class="btn btn--blue btn--big">Войти</button>
	</form>

	<div class="registr-sec__note">
		<p><a href="forgotpass.php">Забыли пароль?</a></p>
		<p>Еще не зарегистрированы? <a href="#" data-ag="choose-registr" class="login-reg-link">Зарегистрироваться</a></p>
	</div>
</section>

<?php include('footer.php'); ?>