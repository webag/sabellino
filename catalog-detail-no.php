<?php include('header.php'); ?>

<section class="actions-section">
	<a href="/catalog.php" class="back-link">Назад к списку товаров</a>
</section>


<section class="tovar-details">
	<!--images-->
	<div class="tovar-details__left grid-7 grid-12_m">

		<div class="tovar-big-slider">
			<div class="tovar-big-slide">
				<img src="/images/thumbs/t-slide1.jpg" alt="1">
			</div>
			<div class="tovar-big-slide">
				<img src="/images/thumbs/t-slide2.jpg" alt="2">
			</div>
			<div class="tovar-big-slide">
				<img src="/images/thumbs/t-slide3.jpg" alt="3">
			</div>
			<div class="tovar-big-slide">
				<img src="/images/thumbs/t-slide4.jpg" alt="4">
			</div>
		</div>

		<div class="tovar-small-slider">
			<div class="tovar-small-slide">
				<img src="/images/thumbs/t-slide1.jpg" alt="70x70">
			</div>
			<div class="tovar-small-slide">
				<img src="/images/thumbs/t-slide2.jpg" alt="70x70">
			</div>
			<div class="tovar-small-slide">
				<img src="/images/thumbs/t-slide3.jpg" alt="70x70">
			</div>
			<div class="tovar-small-slide">
				<img src="/images/thumbs/t-slide4.jpg" alt="70x70">
			</div>
		</div>
	</div>
	<!--images-->

	<!--info-->
	<div class="tovar-info grid-5 grid-12_m">
		<h1 class="tovar-info__name">Sabellino Сумка Обыкновенная</h1>
		<span class="tovar-info__type">Сумка экокожа</span>
		<div class="tovar-info__prices">
			<span class="tovar-info__price">6 850 руб.</span>
		</div>
		<div class="ti-sizes ti-sizes--details">
			<span class="tovar-info__sm-title">Размеры:</span>
			<input type="checkbox" id="r1" disabled>
			<label for="r1">xs</label>
			<input type="checkbox" id="r2" disabled>
			<label for="r2">s</label>
			<input type="checkbox" id="r3" disabled>
			<label for="r3" title="Нет в наличии">m</label>
			<input type="checkbox" id="r4" disabled>
			<label for="r4">l</label>
			<input type="checkbox" id="r5" disabled>
			<label for="r5">xl</label>
			<input type="checkbox" id="r6" disabled>
			<label for="r6" title="Нет в наличии">xxl</label>
		</div>
		<div class="tovar-info__quantity">
			<div class="tovar-info__sm-title">Количество</div>
			<div class="quantity">
				<figure class="quantity__minus"></figure>
				<input type="text" value="1">
				<figure class="quantity__plus"></figure>
			</div>
		</div>
		<div class="tovar-info__buywrap">
			<button class="btn btn--blue btn--big" disabled>Добавить в корзину</button>
			<div class="tovar-info__msgme">
				<a href="#">Сообщить о поступлении</a>
			</div>
		</div>
		<div class="tovar-info__pricenote user-content">
			<p>Указана розничная цена. Для получения доступа к оптовым ценам. пройдите <a href="#">регистрацию</a> и авторизуйтесь как юрлицо.</p>
		</div>
		<main class="tovar-info__main user-content">
			<h5>О товаре</h5>
			<p>Состав: Хлопок 95%; спандекс 5%</p>
			<p>Стиль: casual</p>
			<div class="tovar-info__description">
				<p>Модель с короткими рукавами и округлым вырезом горловины. Прекрасный вариант на каждый день. Изделие декорировано печатным рисунком.</p>
			</div>
		</main>
		<div class="tovar-info__properties">
			<span>Бренд: <strong>Sabellino</strong></span>
			<span>Материал основной: <strong>экокожа</strong></span>
			<span>Артикул: <strong>7845452</strong></span>
			<span>Высота ручки: <strong>15 см.</strong></span>
			<span>Размер: <strong>25х16х12 см.</strong></span>
		</div>
		<footer class="tovar-info__footer">
			<p>Уникальные предложения, новости и&nbsp;акции для&nbsp;подписчиков Sabellino</p>
			<div class="tovar-info__socials">
				<a href="#"><img src="/images/vk_s.png" alt="vk"></a>
				<a href="#"><img src="/images/insta_s.png" alt="insta"></a>
				<a href="#"><img src="/images/facebook_s.png" alt="facebook"></a>
			</div>
		</footer>
	</div>
	<!--info-->
</section>


<section class="related-section">
	<h5 class="related-section__title">С этим товаром часто покупают</h5>

	<div class="grid-3 grid-6_m grid-12_s">
		<div class="ti">
			<header>
				<a href="/catalog-detail.php"><img src="/images/thumbs/intro1.jpg" alt="bag"></a>
			</header>
			<main>
				<span class="ti__old-price">6 000 руб.</span>
				<span class="ti__new-price">3 000 руб.</span>
				<h5 class="ti__name"><a href="/catalog-detail.php">Сумка женская экокожа</a></h5>
				<div class="ti-colors">
					<span class="ti-colors__title">Цвет:</span>
					<span>небесно голубой</span>
				</div>
			</main>
			<footer>
				<div class="ti-sizes">
					<span class="ti-sizes__title">Размеры:</span>
					<input type="checkbox" id="r1">
					<label for="r1">xs</label>
					<input type="checkbox" id="r2">
					<label for="r2">s</label>
					<input type="checkbox" id="r3" disabled>
					<label for="r3" title="Нет в наличии">m</label>
					<input type="checkbox" id="r4">
					<label for="r4">l</label>
					<input type="checkbox" id="r5">
					<label for="r5">xl</label>
					<input type="checkbox" id="r6" disabled>
					<label for="r6" title="Нет в наличии">xxl</label>
				</div>
				<div class="ti-buy">
					<button class="btn btn--blue btn--big">В корзину</button>
					<a href="#" class="ti-buy__oneclick">Купить в 1 клик</a>
				</div>
			</footer>
		</div>
	</div>

	<div class="grid-3 grid-6_m grid-12_s">
		<div class="ti">
			<header>
				<div class="ti-labels">
					<a href="#" class="ti-label ti-label--orange">NEW</a>
				</div>
				<a href="/catalog-detail.php"><img src="/images/thumbs/intro2.jpg" alt="bag"></a>
			</header>
			<main>
				<span class="ti__price">3 000 руб.</span>
				<h5 class="ti__name"><a href="/catalog-detail.php">Сумка женская экокожа</a></h5>
				<div class="ti-colors">
					<span class="ti-colors__title">Цвет:</span>
					<span>небесно голубой</span>
				</div>
			</main>
			<footer>
				<div class="ti-sizes">
					<span class="ti-sizes__title">Размеры:</span>
					<input type="checkbox" id="r11">
					<label for="r11">xs</label>
					<input type="checkbox" id="r22">
					<label for="r22">s</label>
					<input type="checkbox" id="r33" disabled>
					<label for="r33" title="Нет в наличии">m</label>
					<input type="checkbox" id="r44">
					<label for="r44">l</label>
				</div>
				<div class="ti-buy">
					<button class="btn btn--blue btn--big">В корзину</button>
					<a href="#" class="ti-buy__oneclick">Купить в 1 клик</a>
				</div>
			</footer>
		</div>
	</div>

	<div class="grid-3 grid-6_m grid-12_s">
		<div class="ti">
			<header>
				<div class="ti-labels">
					<a href="#" class="ti-label ti-label--baklazan">-50%</a>
					<a href="#" class="ti-label ti-label--orange">NEW</a>
				</div>
				<a href="/catalog-detail.php"><img src="/images/thumbs/intro3.jpg" alt="bag"></a>
			</header>
			<main>
				<span class="ti__old-price">6 000 руб.</span>
				<span class="ti__new-price">3 000 руб.</span>
				<h5 class="ti__name"><a href="/catalog-detail.php">Сумка женская экокожа</a></h5>
				<div class="ti-colors">
					<span class="ti-colors__title">Цвет:</span>
					<span>небесно голубой</span>
				</div>
			</main>
			<footer>
				<div class="ti-buy">
					<button class="btn btn--blue btn--big">В корзину</button>
					<a href="#" class="ti-buy__oneclick">Купить в 1 клик</a>
				</div>
			</footer>
		</div>
	</div>

	<div class="grid-3 grid-6_m grid-12_s">
		<div class="ti">
			<header>
				<a href="/catalog-detail.php"><img src="/images/thumbs/intro1.jpg" alt="bag"></a>
			</header>
			<main>
				<span class="ti__price">3 000 руб.</span>
				<h5 class="ti__name"><a href="/catalog-detail.php">Сумка женская экокожа</a></h5>
				<div class="ti-colors">
					<span class="ti-colors__title">Цвет:</span>
					<span>сиреневый, зеленый, розовыйбежевый, золотая вставка</span>
				</div>
			</main>
			<footer>
				<div class="ti-sizes">
					<span class="ti-sizes__title">Размеры:</span>
					<input type="checkbox" id="r111">
					<label for="r111">xs</label>
					<input type="checkbox" id="r222">
					<label for="r222">s</label>
				</div>
				<div class="ti-buy">
					<button class="btn btn--blue btn--big">В корзину</button>
					<a href="#" class="ti-buy__oneclick">Купить в 1 клик</a>
				</div>
			</footer>
		</div>
	</div>

</section>

<?php include('footer.php'); ?>