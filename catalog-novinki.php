<?php include('header.php'); ?>

<div class="catalog-wrapper">

	<aside class="catalog-aside">

		<div class="cats-razdel">
			<h5 class="cats-razdel__title">Женская коллекция</h5>
			<ul class="cats-menu">
				<li class="cats-menu__has-sub">
					<i class="i-down" title="Показать подкатегории"></i>
					<a href="/catalog.php">Женская одежда</a>
					<span class="cats-menu__num">(189)</span>
					<ul class="cats-menu__sub">
						<li>
							<a href="/catalog.php">Платья</a>
							<span class="cats-menu__num">(189)</span>
						</li>
						<li>
							<a href="/catalog.php">Рубашки</a>
							<span class="cats-menu__num">(3892)</span>
						</li>
						<li>
							<a href="/catalog.php">Юбки</a>
							<span class="cats-menu__num">(123189)</span>
						</li>
						<li>
							<a href="/catalog.php">Брюки</a>
							<span class="cats-menu__num">(0)</span>
						</li>
					</ul>
				</li>
				<li class="cats-menu__has-sub">
					<i class="i-down" title="Показать подкатегории"></i>
					<a href="/catalog.php">Женские аксессуары</a>
					<span class="cats-menu__num">(3892)</span>
					<ul class="cats-menu__sub">
						<li class="active">
							<a href="/catalog.php">Сумки</a>
							<span class="cats-menu__num">(3892)</span>
						</li>
						<li>
							<a href="/catalog.php">Рюкзаки</a>
							<span class="cats-menu__num">(3892)</span>
						</li>
						<li>
							<a href="/catalog.php">Платки и палантины</a>
							<span class="cats-menu__num">(3892)</span>
						</li>
						<li>
							<a href="/catalog.php">Бизнес аксесссуары</a>
							<span class="cats-menu__num">(3892)</span>
						</li>
						<li>
							<a href="/catalog.php">Головные уборы</a>
							<span class="cats-menu__num">(3892)</span>
						</li>
						<li>
							<a href="/catalog.php">Перчатки</a>
							<span class="cats-menu__num">(3892)</span>
						</li>
					</ul>
				</li>
				<li>
					<a href="/catalog.php">Категория без подразделов</a>
					<span class="cats-menu__num">(3892)</span>
				</li>
			</ul>
		</div>

		<div class="cats-razdel">
			<h5 class="cats-razdel__title">Мужская коллекция</h5>
			<ul class="cats-menu">
				<li class="cats-menu__has-sub">
					<i class="i-down" title="Показать подкатегории"></i>
					<a href="/catalog.php">Мужская одежда</a>
					<span class="cats-menu__num">(3892)</span>
					<ul class="cats-menu__sub">
						<li>
							<a href="/catalog.php">Платья</a>
							<span class="cats-menu__num">(3892)</span>
						</li>
						<li>
							<a href="/catalog.php">Рубашки</a>
							<span class="cats-menu__num">(3892)</span>
						</li>
						<li class="cats-menu__has-sub">
							<i class="i-down" title="Показать подкатегории"></i>
							<a href="/catalog.php">Мужская одежда</a>
							<span class="cats-menu__num">(3892)</span>
							<ul class="cats-menu__sub">
								<li>
									<a href="/catalog.php">Платья</a>
									<span class="cats-menu__num">(3892)</span>
								</li>
								<li class="cats-menu__has-sub">
									<i class="i-down" title="Показать подкатегории"></i>
									<a href="/catalog.php">Мужская одежда</a>
									<span class="cats-menu__num">(3892)</span>
									<ul class="cats-menu__sub">
										<li>
											<a href="/catalog.php">Платья</a>
											<span class="cats-menu__num">(3892)</span>
										</li>
										<li>
											<a href="/catalog.php">Рубашки</a>
											<span class="cats-menu__num">(3892)</span>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li>
							<a href="/catalog.php">Брюки</a>
							<span class="cats-menu__num">(3892)</span>
						</li>
					</ul>
				</li>
				<li>
					<a href="/catalog.php">Категория без подразделов</a>
					<span class="cats-menu__num">(3892123123)</span>
				</li>
			</ul>
		</div>

	</aside>

	<main class="catalog-main">

		<h1 class="catalog-title">Новинки</h1>

		<section class="novinki-section">
			<header class="novinki-section__header">
				<h2 class="novinki-section__title">Сумки</h2>
				<a href="#" class="novinki-section__link">Перейти в раздел</a>
			</header>

			<div class="grid-4 grid-6_l grid-12_s">
				<div class="ti">
					<header>
						<a href="#"><img src="/images/thumbs/intro1.jpg" alt="По высоте максимум 240px, ширина не важна. Идеально: квадрат 240x240 c белым фоном"></a>
					</header>
					<main>
						<span class="ti__old-price">6 000 руб.</span>
						<span class="ti__new-price">3 000 руб.</span>
						<h5 class="ti__name"><a href="#">Сумка женская экокожа</a></h5>
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

			<div class="grid-4 grid-6_l grid-12_s">
				<div class="ti">
					<header>
						<div class="ti-labels">
							<a href="#" class="ti-label ti-label--orange">NEW</a>
						</div>
						<a href="#"><img src="/images/thumbs/intro2.jpg" alt="По высоте максимум 240px, ширина не важна. Идеально: квадрат 240x240 c белым фоном"></a>
					</header>
					<main>
						<span class="ti__price">3 000 руб.</span>
						<h5 class="ti__name"><a href="#">Сумка женская экокожа</a></h5>
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

			<div class="grid-4 grid-6_l grid-12_s">
				<div class="ti">
					<header>
						<div class="ti-labels">
							<a href="#" class="ti-label ti-label--baklazan">-50%</a>
							<a href="#" class="ti-label ti-label--orange">NEW</a>
						</div>
						<a href="#"><img src="/images/thumbs/intro3.jpg" alt="По высоте максимум 240px, ширина не важна. Идеально: квадрат 240x240 c белым фоном"></a>
					</header>
					<main>
						<span class="ti__old-price">6 000 руб.</span>
						<span class="ti__new-price">3 000 руб.</span>
						<h5 class="ti__name"><a href="#">Сумка женская экокожа</a></h5>
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
		</section>

		<section class="novinki-section">
			<header class="novinki-section__header">
				<h2 class="novinki-section__title">Большие сумки</h2>
				<a href="#" class="novinki-section__link">Перейти в раздел</a>
			</header>

			<div class="grid-4 grid-6_l grid-12_s">
				<div class="ti">
					<header>
						<a href="#"><img src="/images/thumbs/intro1.jpg" alt="По высоте максимум 240px, ширина не важна. Идеально: квадрат 240x240 c белым фоном"></a>
					</header>
					<main>
						<span class="ti__old-price">6 000 руб.</span>
						<span class="ti__new-price">3 000 руб.</span>
						<h5 class="ti__name"><a href="#">Сумка женская экокожа</a></h5>
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

			<div class="grid-4 grid-6_l grid-12_s">
				<div class="ti">
					<header>
						<div class="ti-labels">
							<a href="#" class="ti-label ti-label--orange">NEW</a>
						</div>
						<a href="#"><img src="/images/thumbs/intro2.jpg" alt="По высоте максимум 240px, ширина не важна. Идеально: квадрат 240x240 c белым фоном"></a>
					</header>
					<main>
						<span class="ti__price">3 000 руб.</span>
						<h5 class="ti__name"><a href="#">Сумка женская экокожа</a></h5>
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

			<div class="grid-4 grid-6_l grid-12_s">
				<div class="ti">
					<header>
						<div class="ti-labels">
							<a href="#" class="ti-label ti-label--baklazan">-50%</a>
							<a href="#" class="ti-label ti-label--orange">NEW</a>
						</div>
						<a href="#"><img src="/images/thumbs/intro3.jpg" alt="По высоте максимум 240px, ширина не важна. Идеально: квадрат 240x240 c белым фоном"></a>
					</header>
					<main>
						<span class="ti__old-price">6 000 руб.</span>
						<span class="ti__new-price">3 000 руб.</span>
						<h5 class="ti__name"><a href="#">Сумка женская экокожа</a></h5>
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
		</section>

		<section class="novinki-section">
			<header class="novinki-section__header">
				<h2 class="novinki-section__title">Клатчи Перейти в раздел Перейти в раздел</h2>
				<a href="#" class="novinki-section__link">Перейти в раздел</a>
			</header>

			<div class="grid-4 grid-6_l grid-12_s">
				<div class="ti">
					<header>
						<a href="#"><img src="/images/thumbs/intro1.jpg" alt="По высоте максимум 240px, ширина не важна. Идеально: квадрат 240x240 c белым фоном"></a>
					</header>
					<main>
						<span class="ti__old-price">6 000 руб.</span>
						<span class="ti__new-price">3 000 руб.</span>
						<h5 class="ti__name"><a href="#">Сумка женская экокожа</a></h5>
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

			<div class="grid-4 grid-6_l grid-12_s">
				<div class="ti">
					<header>
						<div class="ti-labels">
							<a href="#" class="ti-label ti-label--orange">NEW</a>
						</div>
						<a href="#"><img src="/images/thumbs/intro2.jpg" alt="По высоте максимум 240px, ширина не важна. Идеально: квадрат 240x240 c белым фоном"></a>
					</header>
					<main>
						<span class="ti__price">3 000 руб.</span>
						<h5 class="ti__name"><a href="#">Сумка женская экокожа</a></h5>
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

			<div class="grid-4 grid-6_l grid-12_s">
				<div class="ti">
					<header>
						<div class="ti-labels">
							<a href="#" class="ti-label ti-label--baklazan">-50%</a>
							<a href="#" class="ti-label ti-label--orange">NEW</a>
						</div>
						<a href="#"><img src="/images/thumbs/intro3.jpg" alt="bag"></a>
					</header>
					<main>
						<span class="ti__old-price">6 000 руб.</span>
						<span class="ti__new-price">3 000 руб.</span>
						<h5 class="ti__name"><a href="#">Сумка женская экокожа</a></h5>
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

			<div class="grid-4 grid-6_l grid-12_s">
				<div class="ti">
					<header>
						<a href="#"><img src="/images/thumbs/intro1.jpg" alt="bag"></a>
					</header>
					<main>
						<span class="ti__price">3 000 руб.</span>
						<h5 class="ti__name"><a href="#">Сумка женская экокожа</a></h5>
						<div class="ti-colors">
							<span class="ti-colors__title">Цвет:</span>
							<span>сиреневый, зеленый, розовыйбежевый, золотая вставка</span>
						</div>
					</main>
					<footer>
						<div class="ti-sizes">
							<span class="ti-sizes__title">Размеры:</span>
							<input type="checkbox" id="r111" disabled>
							<label for="r111">xs</label>
							<input type="checkbox" id="r222" disabled>
							<label for="r222">s</label>
						</div>
						<div class="ti-buy">
							<button class="btn btn--blue btn--big" disabled>В корзину</button>
							<a href="#" class="ti-buy__alertme">Сообщить о поступлении</a>
						</div>
					</footer>
				</div>
			</div>

			<div class="grid-4 grid-6_l grid-12_s">
				<div class="ti">
					<header>
						<a href="#"><img src="/images/thumbs/intro1.jpg" alt="По высоте максимум 240px, ширина не важна. Идеально: квадрат 240x240 c белым фоном"></a>
					</header>
					<main>
						<span class="ti__old-price">6 000 руб.</span>
						<span class="ti__new-price">3 000 руб.</span>
						<h5 class="ti__name"><a href="#">Сумка женская экокожа</a></h5>
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



		</section>

	</main>

</div><!--catalog-wrapper end-->

<?php include('footer.php'); ?>
