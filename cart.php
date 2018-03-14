<?php include('header.php'); ?>


<section class="page-title">
	<h1 class="page-title__name">Корзина</h1>
</section>

<section class="actions-section actions-section--cart">
	<a href="/catalog.php" class="back-link">Назад к списку товаров</a>
	<div class="actions-section__right">
		<!--<a href="#" class="actions-section__1buy">Купить в 1 клик</a>-->
		<div>
			<a href="/checkout-opt.php" class="btn btn--blue btn--big">Оформить заказ</a>
			<div class="cart-reserv">
				<div class="cart-reserv__title">Заказ в резерве</div>
				<div class="cart-reserv__subtitle"></div>
				<div class="cart-reserv__counter">
					<span class="cart-reserv__hours">00</span>
					:
					<span class="cart-reserv__minutes">00</span>
					:
					<span class="cart-reserv__seconds">00</span>
				</div>
			</div>
		</div>
	</div>
</section>


<section class="cart">

	<header class="cart-header">
		<div class="cart-header__1">Описание</div>
		<div class="cart-header__2">Наличие</div>
		<div class="cart-header__3">Цена</div>
		<div class="cart-header__4">Количество</div>
		<div class="cart-header__5">Сумма</div>
		<div class="cart-header__6">&nbsp;</div>
	</header>

	<div class="cart-item">

		<div class="cart-item-cell cart-item__descr">
			<div class="cid-wrap">
				<a href="#"><img src="/images/thumbs/cart1.jpg" alt="160xXXXX"></a>
				<div class="ci-info">
					<span class="ci-info__name"><a href="#">Сумка Нежная коллекция</a></span>
					<span class="ci-info__type">Экокожа</span>
					<span class="ci-info__param">Артикул: <strong>0111016427_64</strong></span>
					<span class="ci-info__param">Цвет: <strong>бирюзовый</strong></span>
				</div>
			</div>
		</div>

		<div class="cart-item-cell cart-item__nal">
			<span>На складе</span>
		</div>

		<div class="cart-item-cell cart-item__price">
			<span class="cart-item__mobile-title">Цена:</span>
			<span class="ci-old-price">6 000 руб.</span>
			<span class="ci-new-price">3 800 руб. (-40%)</span>
		</div>

		<div class="cart-item-cell cart-item__quantity">
			<span class="cart-item__mobile-title">Количество:</span>
			<div class="quantity">
				<figure class="quantity__minus"></figure>
				<input type="text" value="1">
				<figure class="quantity__plus"></figure>
			</div>
		</div>

		<div class="cart-item-cell cart-item__summ">
			<span class="cart-item__mobile-title">Сумма:</span>
			<span class="ci-price">6 860 руб.</span>
		</div>

		<div class="cart-item-cell cart-item__delete">
			<a href="#" class="ci-delete" title="Убрать из заказа"></a>
		</div>

	</div>

	<div class="cart-item">

		<div class="cart-item-cell cart-item__descr">
			<div class="cid-wrap">
				<a href="#"><img src="/images/thumbs/cart2.jpg" alt="160xXXXX"></a>
				<div class="ci-info">
					<span class="ci-info__name"><a href="#">Сумка коллекции AngleBags</a></span>
					<span class="ci-info__type">Силикон</span>
					<span class="ci-info__param">Артикул: <strong>0111016427_64</strong></span>
					<span class="ci-info__param">Цвет: <strong>черный</strong></span>
				</div>
			</div>
		</div>

		<div class="cart-item-cell cart-item__nal">
			<span>На складе</span>
		</div>

		<div class="cart-item-cell cart-item__price">
			<span class="cart-item__mobile-title">Цена:</span>
			<span class="ci-price">6 860 руб.</span>
		</div>

		<div class="cart-item-cell cart-item__quantity">
			<span class="cart-item__mobile-title">Количество:</span>
			<div class="quantity">
				<figure class="quantity__minus"></figure>
				<input type="text" value="1">
				<figure class="quantity__plus"></figure>
			</div>
		</div>

		<div class="cart-item-cell cart-item__summ">
			<span class="cart-item__mobile-title">Сумма:</span>
			<span class="ci-price">6 860 руб.</span>
		</div>

		<div class="cart-item-cell cart-item__delete">
			<a href="#" class="ci-delete" title="Убрать из заказа"></a href="#">
		</div>

	</div>

</section>

<section class="cart-footer">

	<div class="coupon-block">
		<input type="text" placeholder="Введите код купона для скидки:">
		<button type="submit" class="btn btn--simple">Получить скидку</button>
	</div>

	<div class="cart-totals">

		<div class="cart-total">
			<div class="cart-total__title">Стоимость товаров</div>
			<div class="cart-total__val">22 350 руб.</div>
		</div>

		<div class="cart-total">
			<div class="cart-total__title">Доставка</div>
			<div class="cart-total__val">300 руб.</div>
		</div>

		<div class="cart-total cart-total--coupon">
			<div class="cart-total__title">Купон на скидку</div>
			<div class="cart-total__val">11 175 руб. <small>(-50%)</small></div>
		</div>

		<div class="cart-total cart-total--itogo">
			<div class="cart-total__title">Итого</div>
			<div class="cart-total__val">11 475 руб.</div>
		</div>

	</div>

</section>


<section class="actions-section actions-section--cart-bottom">
	<a href="/catalog.php" class="back-link">Назад к списку товаров</a>
	<div class="actions-section__right">
		<!--<a href="#" class="actions-section__1buy">Купить в 1 клик</a>-->
		<div>
			<div class="cart-reserv">
				<div class="cart-reserv__title">Заказ в резерве</div>
				<div class="cart-reserv__subtitle"></div>
				<div class="cart-reserv__counter">
					<span class="cart-reserv__hours">00</span>
					:
					<span class="cart-reserv__minutes">00</span>
					:
					<span class="cart-reserv__seconds">00</span>
				</div>
			</div>
			<a href="/checkout-rozn.php" class="btn btn--blue btn--big">Оформить заказ</a>
		</div>
	</div>
</section>


<script src="js/countdown.min.js" type="text/javascript" ></script>

<script>
	function setCookie(name, value, options) {
		options = options || {};

		var expires = options.expires;

		if (typeof expires == "number" && expires) {
			var d = new Date();
			d.setTime(d.getTime() + expires * 1000);
			expires = options.expires = d;
		}
		if (expires && expires.toUTCString) {
			options.expires = expires.toUTCString();
		}

		value = encodeURIComponent(value);

		var updatedCookie = name + "=" + value;

		for (var propName in options) {
			updatedCookie += "; " + propName;
			var propValue = options[propName];
			if (propValue !== true) {
				updatedCookie += "=" + propValue;
			}
		}

		document.cookie = updatedCookie;
	}

	function getCookie(name) {
		var matches = document.cookie.match(new RegExp(
			"(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, '\\$1') + "=([^;]*)"
		));
		return matches ? decodeURIComponent(matches[1]) : undefined;
	}

	var now = new Date();
	var end = new Date();
	var cookieTime = getCookie("reservtime");

	if (cookieTime === undefined){
		end = new Date(now.getFullYear(),now.getMonth(),now.getDate(),now.getHours(),now.getMinutes()+15,now.getSeconds());
		setCookie("reservtime", end, {expires: 3600*60*60});
	} else {
		end = Date.parse(cookieTime);
	}

	function counter_update() {
		var now = new Date();
		var timespan = countdown(now, end, countdown.HOURS | countdown.MINUTES | countdown.SECONDS);

		$('.cart-reserv__hours').text(timespan.hours);
		$('.cart-reserv__minutes').text(timespan.minutes);
		$('.cart-reserv__seconds').text(timespan.seconds);

		var delta = (end - now);
		if (delta < 0){
			setReservEnd();
			return false;
		}

		requestAnimationFrame(counter_update);
	}

	var delta = (end - now);
	console.log(delta);
	if (delta < 0){
		setReservEnd();
	} else {
		counter_update();
	}

	function setReservEnd() {
		$('.cart-reserv__hours').text('00');
		$('.cart-reserv__minutes').text('00');
		$('.cart-reserv__seconds').text('00');
		$('.cart-reserv__title').text('Товар снят с резерва,');
		$('.cart-reserv__subtitle').text('добавьте его еще раз в корзину.');
	}
</script>

<?php include('footer.php'); ?>