<?php include('header.php'); ?>

<section class="page-title">
	<h1 class="page-title__name">Корзина</h1>
	<!--<span class="page-title__sub">Розничный покупатель</span>-->
</section>

<section class="actions-section">
	<a href="/catalog.php" class="back-link">Назад к списку товаров</a>
	<div class="actions-section__right">
		<a href="#" class="actions-section__1buy">Купить в 1 клик</a>
		<a href="#" class="btn btn--blue btn--big">Оформить заказ</a>
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


<section class="actions-section">
	<a href="/catalog.php" class="back-link">Назад к списку товаров</a>
	<div class="actions-section__right">
		<a href="#" class="actions-section__1buy">Купить в 1 клик</a>
		<a href="#" class="btn btn--blue btn--big">Оформить заказ</a>
	</div>
</section>


<?php include('footer.php'); ?>