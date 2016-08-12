<?php include('header.php'); ?>

<section class="page-title">
	<h1 class="page-title__name">Оформление заказа</h1>
	<span class="page-title__sub">Оптовый покупатель</span>
</section>

<form action="#">


<section class="method-sec">
	<h2 class="method-sec__title">Способ доставки</h2>

	<input type="radio" name="deliv_method" id="deliv_method_1">
	<label class="method" for="deliv_method_1">
		<figure>
			<img src="/images/methods/bag.svg" alt="bag">
		</figure>
		<div class="user-content">
			<h5 class="method__name">Доставка курьером (Москва и МО)</h5>
			<p>Срок доставки от 1 до 3 дней. Доставка осуществляется в течение дня с 10.00 до 19.00. Только для оптовых покупателей.</p>
			<br>
			<strong>Стоимость доставки 300 рублей.</strong>
		</div>
	</label>

	<input type="radio" name="deliv_method" id="deliv_method_2">
	<label class="method" for="deliv_method_2">
		<figure>
			<img src="/images/methods/car.svg" alt="car">
		</figure>
		<div class="user-content">
			<h5 class="method__name">Транспортная компания</h5>
			<p>Срок доставки от 1 до 5 дней. Доставка осуществляется для оптовых покупателей.</p>
			<br>
			<strong>Стоимость доставки 600 рублей.</strong>
		</div>
	</label>

	<input type="radio" name="deliv_method" id="deliv_method_3">
	<label class="method" for="deliv_method_3">
		<figure>
			<img src="/images/methods/telega.svg" alt="telega">
		</figure>
		<div class="user-content">
			<h5 class="method__name">Самовывоз</h5>
			<p>Самовывоз доступен только для оптовых покупателей.</p>
			<br>
			<strong>Стоимость бесплатно</strong>
		</div>
	</label>

</section>


<section class="checkout-form">
	<h2 class="checkout-form__title">Информация о покупателе</h2>

	<div class="grid-4 grid-12_m">
		<div class="input-group">
			<label>Ф.И.О. *</label>
			<input type="text" name="XXX">
		</div>
		<div class="input-group">
			<label>E-mail *</label>
			<input type="email" name="XXX" class="error">
		</div>
		<div class="input-group">
			<label>Телефон *</label>
			<input type="tel" name="XXX">
		</div>
		<div class="input-group">
			<label>Адрес доставки</label>
			<input type="text" name="XXX">
		</div>
	</div>

	<div class="grid-8 grid-12_m checkout-form__right">
		<div class="input-group">
			<label>Комментарий к заказу</label>
			<textarea name="XXX" rows="10"></textarea>
		</div>
	</div>

	<div class="checkout-form__note">*Поля, обязательные для заполнения.</div>

</section>


<h2 class="cart-checkout-header">Заказ</h2>
<section class="cart cart-checkout">

	<header class="cart-header">
		<div class="cart-header__1">Описание</div>
		<div class="cart-header__2">Наличие</div>
		<div class="cart-header__3">Цена</div>
		<div class="cart-header__4">Количество</div>
		<div class="cart-header__5">Сумма</div>
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
			<span>2</span>
		</div>

		<div class="cart-item-cell cart-item__summ">
			<span class="cart-item__mobile-title">Сумма:</span>
			<span class="ci-price">6 860 руб.</span>
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
			<span>1</span>
		</div>

		<div class="cart-item-cell cart-item__summ">
			<span class="cart-item__mobile-title">Сумма:</span>
			<span class="ci-price">6 860 руб.</span>
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


<section class="actions-section">
	<div class="actions-section__right">
		<button type="submit" class="btn btn--blue btn--big">Оформить заказ</button>
	</div>
</section>

</form>

<?php include('footer.php'); ?>