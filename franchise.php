<?php include('header.php'); ?>

<section class="page-title">
	<h1 class="page-title__name">Франчайзинг Smart-Fashion</h1>
	<p class="page-title__sub">Думаем за вас, делаем за вас!</p>
</section>


<section class="fr-top user-content">
	<h2>Smart-Fashion World</h2>
	<p>Группа компаний Smart-Fashion была основана в 2007 году. Нестандартный подход к ведению бизнеса, быстрое реагирование на меняющиеся потребности и условия рынка, тиражирование лучших технологий обеспечивают стремительное успешное развитие компании.</p>
	<p>Сегодня ГК Smart-Fashion предлагает для сотрудничества франшизы двух брендов - Piero и Sabellino: </p>
	<ul>
		<li>более 3 500 партнеров в России и СНГ</li>
		<li>более 100 магазинов в России</li>
	</ul>
	<p>Франчайзинговые партнеры компании Smart-Fashion получают полную поддержку, отсутствие избыточных платежей и уникальную модель смешанного франчайзинга. Так же мы берем на себя тонкое управление вашим бизнесом, чтобы вы получали максимальную прибыль с минимальными ресурсозатратами.</p>
	<div class="fr-top__btn">
		<a href="#" data-ag="modal-fran" class="btn btn--baklazan btn--big">Отправить заявку</a>
	</div>
</section>

<div id="modal-fran" class="agmodal agmodal--fran">
	<main>
		<p class="agmodal__title">Заполнить анкету</p>
		<form class="ajax-form fran-form">
			<div class="grid-6 grid-12_s">
				<div class="input-group">
					<label>Имя *</label>
					<input type="text" name="user_name" data-req="true" data-label="Имя">
				</div>
			</div>
			<div class="grid-6 grid-12_s">
				<div class="input-group">
					<label>Фамилия *</label>
					<input type="text" name="user_surname" data-req="true" data-label="Фамилия">
				</div>
			</div>
			<div class="grid-4 grid-12_s">
				<div class="input-group">
					<label>Телефон *</label>
					<input type="tel" name="user_phone" data-req="true" data-label="Телефон">
				</div>
			</div>
			<div class="grid-4 grid-12_s">
				<div class="input-group">
					<label>E-mail *</label>
					<input type="email" name="user_mail" data-req="true" data-label="E-mail">
				</div>
			</div>
			<div class="grid-4 grid-12_s">
				<div class="input-group">
					<label>Город *</label>
					<input type="text" name="user_city" data-req="true" data-label="Город">
				</div>
			</div>
			<div class="grid-12">
				<div class="input-group">
					<label>Задать вопрос</label>
					<textarea type="text" name="user_question" data-label="Вопрос" rows="6"></textarea>
				</div>
			</div>
			<div class="registr-sec__reqnote">* Поля, обязательные для заполнения.</div>
			<div class="fr-choose">
				<p>Какая франшиза Вас интересует?</p>
				<label class="radio-input">
					<input type="radio" name="fran" value="Piero" required data-label="Франшиза">
					<span class="radio-input__style">Piero</span>
				</label>
				<label class="radio-input">
					<input type="radio" name="fran" value="Sabellino" required data-label="Франшиза">
					<span class="radio-input__style">Sabellino</span>
				</label>
				<label class="radio-input">
					<input type="radio" name="fran" value="Обе" required data-label="Франшиза">
					<span class="radio-input__style">Обе</span>
				</label>
			</div>
			<input type="hidden" name="form_subject" value="Заполнили анкету франшизы">
			<button type="submit" class="btn btn--blue btn--big">Отправить</button>
		</form>
	</main>
</div>


<section class="fr-slider-sec">
	<div class="img-slider">
		<div class="img-slide">
			<img src="/images/thumbs/fr1.jpg" alt="1">
		</div>
		<div class="img-slide">
			<img src="/images/thumbs/blogimg.jpg" alt="1">
		</div>
	</div>
</section>


<section class="fr-usl-sec">
	<h2>Условия сотрудничества</h2>
	<a href="#" data-ag="usl-piero" class="btn btn--baklazan btn--big">Франчайзинг Piero</a>
	<a href="#" data-ag="usl-sabellino" class="btn btn--baklazan btn--big">Франчайзинг Sabellino</a>

	<div id="usl-piero" class="agmodal">
		<main>
			<p class="agmodal__title">Франчайзинг Piero</p>
			<div class="user-content">
				<p>Отправляя форму регистрации, Вы&nbsp;автоматически даете свое согласие на&nbsp;обработку персональных данных.</p>
				<h5>Отправляя форму регистрации</h5>
				<p>Отправляя форму регистрации, Вы&nbsp;автоматически даете свое согласие на&nbsp;обработку персональных данных.</p>
				<ul>
					<li>Отправляя форму регистрации</li>
					<li>Вы&nbsp;автоматически даете свое согласие на&nbsp;обработку персональных данных.</li>
					<li>nbsp;обработку персональных данных.</li>
				</ul>
				<p>Отправляя форму регистрации, Вы&nbsp;автоматически даете свое согласие на&nbsp;обработку персональных данных. Отправляя форму регистрации, Вы&nbsp;автоматически даете свое согласие на&nbsp;обработку персональных данных.</p>
			</div>
		</main>
	</div>

	<div id="usl-sabellino" class="agmodal">
		<main>
			<p class="agmodal__title">Франчайзинг Sabellino</p>
			<div class="user-content">
				<p>Отправляя форму регистрации, Вы&nbsp;автоматически даете свое согласие на&nbsp;обработку персональных данных.</p>
				<h5>Отправляя форму регистрации</h5>
				<p>Отправляя форму регистрации, Вы&nbsp;автоматически даете свое согласие на&nbsp;обработку персональных данных.</p>
				<ul>
					<li>Отправляя форму регистрации</li>
					<li>Вы&nbsp;автоматически даете свое согласие на&nbsp;обработку персональных данных.</li>
					<li>nbsp;обработку персональных данных.</li>
				</ul>
				<p>Отправляя форму регистрации, Вы&nbsp;автоматически даете свое согласие на&nbsp;обработку персональных данных. Отправляя форму регистрации, Вы&nbsp;автоматически даете свое согласие на&nbsp;обработку персональных данных.</p>
			</div>
		</main>
	</div>
</section>


<section class="fr-cont-sec">
	<h2>Контакты отдела развития</h2>
	<div class="c-block">
		<img src="/images/cphone.png" alt="phone">
		<a href="tel:+7(499)922-06-90">+7 (499) 922-06-90</a>
	</div>
	<div class="c-block">
		<img src="/images/cmail.png" alt="mail">
		<a href="mailto:info@smfashion.ru">info@smfashion.ru</a>
	</div>
</section>


<section class="fr-bottom user-content">
	<h2>Сеть Франчайзинга</h2>
	<h5>Фирменные магазины Sabellino:</h5>
	<p>г. Белгород ТРЦ "МегаГринн" проспект Богдана Хмельницкого, д. 137Т<br>
		г. В.Новгород  ТЦ "Волна" ул. Большая Санкт-Петербургская, д. 39<br>
		г. Мурманск ул.  Самойловой, д. 5<br>
		г. Новокузнецк ТРЦ "Сити-мол" ул. Кирова, д. 55<br>
		г. Петрозаводск ТРЦ "Макси" ул. Ленина д. 14<br>
		Республика Казахстан, г. Караганда  ТЦ "Арбат"<br>
		г. Тюмень ТЦ "Солнечный" ул. Пермякова, д. 50Б.<br>
		г. Тюмень ТРЦ  "Кристалл" ул. Широтная, д. 148/1<br>
		г. Тюмень ТЦ "Яркий Сибиряк" ул. Александра Логунова, д. 5</p>
	<br>
	<h5>Фирменные магазины Piero: </h5>
	<p>г. Пятигорск ТЦ "Галерея" пр. Кирова, д. 65<br>
		г. Якутск ТЦ " Атлант" ул. Орджоникидзе, д. 21</p>
</section>


<?php include('footer.php'); ?>