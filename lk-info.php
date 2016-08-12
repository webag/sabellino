<?php include('header.php'); ?>

<section class="page-title">
	<h1 class="page-title__name">Личный кабинет</h1>
</section>

<section class="tabs">
	<a href="/lk-info.php" class="active">Личные данные</a>
	<a href="/lk-history.php">История покупок</a>
</section>


<section class="registr-sec">

	<form action="#">
		<div class="input-group">
			<label>Ф.И.О.</label>
			<input type="text" name="XXX" value="Иван Иваныч Бородин">
		</div>
		<div class="input-group">
			<label>ИНН</label>
			<input type="text" name="XXX" value="Показывается для опт">
		</div>
		<div class="input-group">
			<label>Телефон *</label>
			<input type="tel" name="XXX" value="+7(999) 999-99-99">
		</div>
		<div class="input-group">
			<label>E-mail *</label>
			<input type="email" name="XXX" value="www@ttt.ru">
		</div>
		<div class="input-group">
			<label>Придумайте и введите пароль *</label>
			<input type="password" name="XXX">
		</div>
		<div class="registr-sec__reqnote">Пароль должен быть не менее 6 символов длиной</div>
		<button type="submit" class="btn btn--blue btn--big">Сменить данные</button>
	</form>

</section>


<?php include('footer.php'); ?>