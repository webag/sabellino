<?php include('header.php'); ?>

<section class="page-title">
	<h1 class="page-title__name">Контакты</h1>
</section>


<section class="contacts">

	<div class="grid-4 grid-12_m contacts__left">
		<div class="contacts__item">
			<h4 class="contacts__title">Отдел розничных продаж</h4>
			<h5 class="contacts__subtitle">Режим работы:</h5>
			<p>с 9.00 до 18.00 понедельник - пятница</p>
			<div class="c-block">
				<img src="/images/cphone.png" alt="phone">
				<a href="tel:+7(499)968-28-12">+7 (499) 968-28-12</a>
			</div>
		</div>

		<div class="contacts__item">
			<h4 class="contacts__title">Отдел оптовых пролажи франчайзинга</h4>
			<h5 class="contacts__subtitle">Режим работы:</h5>
			<p>с 9.00 до 18.00 понедельник - пятница</p>
			<div class="c-block">
				<img src="/images/cphone.png" alt="phone">
				<a href="tel:+7(499)968-28-12">+7 (499) 968-28-12</a>
			</div>
		</div>
	</div>

	<div class="grid-8 grid-12_m">
		<h4 class="contacts__title">Главный офис компании</h4>
		<h5 class="contacts__subtitle">Режим работы:</h5>
		<p>с 9.00 до 18.00 понедельник - пятница</p>
		<h5 class="contacts__subtitle">Адрес:</h5>
		<address>г. Москва, Колодезный переулок, д. 3 стр.17</address>

		<div class="contacts__map">
			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=ffZES3XFzgWORBHivGkbCa01LfBFpDwF&amp;width=100%&amp;height=100%&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=true"></script>
		</div>

		<div class="user-content">
			<h5>На машине:</h5>
			<p>Съезд с МКАД на Щелковское шоссе в сторону центра, далее по Шелковскому шоссе - Большой Черкизовской улице до Преображенской улицы, перед Матросским мостом (за м. Преображенская пл.) съезд на наб. Ганнушкина. На следующем мосту- Оленьем (выезд на ул. Олений вал, примерно 500м) - разворот на противоположную сторону реки Яуза, на Русаковскую наб. С Русаковской наб. за АЗС МТК поворот, далее прямо до Т-образного перекрестка. На перекрестке поворот налево и по Колодезному пер. до конца. Въезд в ворота ООО "Красный дом". Возможен выезд на Колодезный пер. не с набережной, а с ул. Олений вал, для этого на Оленьему мосту проехать прямо.</p>
			<br>
			<h5>На общественном транспорте:</h5>
			<p>Проезд от м. "Преображенская площадь" автобусом 265, 716, троллейбусом 14, 32, 41, трамваем 7, 13, 33, 4пр, маршруткой 269М, 570М, 430М до остановки "Депо им. Русакова, академия приборостроения" (2 или 3 остановки, в зависимости от места посадки). Далее вернуться по ул. Стромынка до д. 23/16 и повернуть налево, далее по Колодезному пер. примерно 100 м до подземного перехода, на выходе из перехода повернуть направо, вход в бизнес центр ООО "Красный дом". Пешком от м. "Преображенская площадь" до бизнес-центра 1100 м.</p>
			<br><br>
			<a href="#" data-ag="modal-question" class="btn btn--baklazan btn--big">Задать вопрос</a>
		</div>
	</div>

</section>


<div id="modal-question" class="agmodal">
	<main>
		<p class="agmodal__title">Задать вопрос</p>
		<form class="ajax-form fran-form">
			<div class="input-group">
				<label>Имя *</label>
				<input type="text" name="user_name" data-req="true" data-label="Имя">
			</div>
			<div class="input-group">
				<label>Телефон *</label>
				<input type="tel" name="user_phone" data-req="true" data-label="Телефон">
			</div>
			<div class="input-group">
				<label>E-mail</label>
				<input type="email" name="user_mail" data-label="E-mail">
			</div>
			<div class="input-group">
				<label>Текст вопроса *</label>
				<textarea type="text" name="user_question" data-req="true" data-label="Вопрос" rows="6"></textarea>
			</div>
			<div class="registr-sec__reqnote">* Поля, обязательные для заполнения.</div>
			<input type="hidden" name="form_subject" value="Задали вопрос">
			<button type="submit" class="btn btn--blue btn--big">Отправить</button>
		</form>
	</main>
</div>



<?php include('footer.php'); ?>