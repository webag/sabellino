<?php include('header.php'); ?>

<section class="page-title">
	<h1 class="page-title__name">Регистрация розничного покупателя</h1>
</section>

<section class="registr-sec">
	<form action="#">
		<div class="input-group">
			<label>Ф.И.О.</label>
			<input type="text" name="XXX">
		</div>
		<div class="input-group">
			<label>Телефон *</label>
			<input type="tel" name="XXX">
		</div>
		<div class="input-group">
			<label>E-mail *</label>
			<input type="email" name="XXX" class="error">
		</div>
		<div class="input-group">
			<label>Придумайте и введите пароль *</label>
			<input type="password" name="XXX">
		</div>
		<div class="registr-sec__reqnote">Пароль должен быть не менее 6 символов длиной<br>* Поля, обязательные для заполнения.</div>
		<button type="submit" class="btn btn--blue btn--big">Зарегистрироваться</button>
	</form>

	<div class="registr-sec__note">Отправляя форму регистрации, Вы&nbsp;автоматически даете свое согласие на&nbsp;обработку персональных данных.</div>
</section>

<?php include('footer.php'); ?>