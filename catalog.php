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
				<li class="cats-menu__has-sub opened">
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
		<h1 class="catalog-title">Сумки</h1>

		<section class="catalog-filter">
			<header>

				<div class="filters">
					<span class="filters__title">Фильтры</span>

					<div class="filter">
						<div class="filter__name"><span>Цена</span></div>
						<div class="filter-sub filter-sub--price">
							<input type="text" id="price_slider" name="price_slider" value="" data-max="10000">
							<!--data-max - если возможно, то подставить максимально возможную цену из существующей выборки товаров.-->
							<div class="btn btn--baklazan btn--small">Применить</div>
							<!-- Далее идут два скрытых поля, куда записываются значение от и до цены. Если нужны другие параметры слайдера цен, то следуй в main.js в раздел "price_slider"-->
							<input type="hidden" name="price_from" value="0">
							<input type="hidden" name="price_to" value="0">
						</div>
					</div>

					<div class="filter">
						<div class="filter__name"><span>Бренд</span></div>
						<div class="filter-sub">
							<div class="filter-sub__var"><a href="#">Piero</a></div>
							<div class="filter-sub__var"><a href="#">Sabellino</a></div>
							<div class="filter-sub__var"><a href="#">Grezzo</a></div>
						</div>
					</div>

					<div class="filter">
						<div class="filter__name"><span>Материал</span></div>
						<div class="filter-sub">
							<div class="filter-sub__var"><a href="#">Кожа</a></div>
							<div class="filter-sub__var"><a href="#">Текстиль</a></div>
							<div class="filter-sub__var"><a href="#">Шелк</a></div>
							<div class="filter-sub__var"><a href="#">Хлопок</a></div>
						</div>
					</div>

					<div class="filter">
						<div class="filter__name"><span>Цвет</span></div>
						<div class="filter-sub filter-sub--colors">
							<label class="filter-sub__color">
								<figure style="background-color:#FF0000;"></figure>
								<input type="checkbox" name="1">
							</label>
							<label class="filter-sub__color">
								<figure style="background-color:#FFFF00;"></figure>
								<input type="checkbox" name="2">
							</label>
							<label class="filter-sub__color">
								<figure style="background-color:green;"></figure>
								<input type="checkbox" name="3">
							</label>
							<label class="filter-sub__color">
								<figure style="background-color:green;"></figure>
								<input type="checkbox" name="4">
							</label>
							<label class="filter-sub__color">
								<figure style="background-color:green;"></figure>
								<input type="checkbox" name="5">
							</label>
						</div>
					</div>

				</div>

				<div class="sorters">
					<div class="sorter-wrapper">
						<div class="sorters__title">Сортировать по:</div>
						<div class="sorter">
							<div class="sorter__name"><span>Возрастанию цены</span></div>
							<div class="sorter-sub">
								<div class="sorter-sub__var"><a href="#">Уменьшению цены</a></div>
							</div>
						</div>
					</div>
					<div class="sorter-wrapper">
						<div class="sorters__title">Выводить по:</div>
						<div class="sorter">
							<div class="sorter__name"><span>30</span></div>
							<div class="sorter-sub">
								<div class="sorter-sub__var"><a href="#">10</a></div>
								<div class="sorter-sub__var"><a href="#">20</a></div>
								<div class="sorter-sub__var"><a href="#">40</a></div>
							</div>
						</div>
					</div>
				</div>

			</header>

			<footer class="active-filters">
				<span class="active-filters__title">Активные фильтры:</span>
				<div class="active-filter" title="Удалить фильтр">Piero<div class="f-delete"></div></div>
				<div class="active-filter" title="Удалить фильтр">Хлопок<div class="f-delete"></div></div>
				<div class="active-filter" title="Удалить фильтр">5 000 – 26 000 руб.<div class="f-delete"></div></div>
				<div class="active-filter" title="Удалить фильтр"><figure style="background-color:#FFA500;"></figure><div class="f-delete"></div></div>
			</footer>
		</section>

		<section class="catalog-list">


			<div class="grid-4 grid-6_l grid-12_s">
				<div class="ti">
					<header>
						<a href="/catalog-detail.php"><img src="/images/thumbs/intro1.jpg" alt="По высоте максимум 240px, ширина не важна. Идеально: квадрат 240x240 c белым фоном"></a>
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
							<a href="#" data-ag="modal-oneclick" class="ti-buy__oneclick">Купить в 1 клик</a>
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
						<a href="/catalog-detail.php"><img src="/images/thumbs/intro2.jpg" alt="По высоте максимум 240px, ширина не важна. Идеально: квадрат 240x240 c белым фоном"></a>
					</header>
					<main>
						<span class="ti__price">3 000 руб.</span>
						<h5 class="ti__name"><a href="/catalog-detail.php">Сумка женская экокожа Сумка женская экокожа Сумка женская экокожа</a></h5>
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
							<a href="#" data-ag="modal-oneclick" class="ti-buy__oneclick">Купить в 1 клик</a>
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
						<a href="/catalog-detail.php"><img src="/images/thumbs/intro3.jpg" alt="По высоте максимум 240px, ширина не важна. Идеально: квадрат 240x240 c белым фоном"></a>
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
							<a href="#" data-ag="modal-oneclick" class="ti-buy__oneclick">Купить в 1 клик</a>
						</div>
					</footer>
				</div>
			</div>

			<div class="grid-4 grid-6_l grid-12_s">
				<div class="ti">
					<header>
						<a href="/catalog-detail-no.php"><img src="/images/thumbs/intro1.jpg" alt="По высоте максимум 240px, ширина не важна. Идеально: квадрат 240x240 c белым фоном"></a>
					</header>
					<main>
						<span class="ti__price">3 000 руб.</span>
						<h5 class="ti__name"><a href="/catalog-detail-no.php">Сумка женская экокожа</a></h5>
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
						<a href="/catalog-detail.php"><img src="/images/thumbs/intro1.jpg" alt="По высоте максимум 240px, ширина не важна. Идеально: квадрат 240x240 c белым фоном"></a>
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
							<a href="#" data-ag="modal-oneclick" class="ti-buy__oneclick">Купить в 1 клик</a>
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
						<a href="/catalog-detail.php"><img src="/images/thumbs/intro2.jpg" alt="По высоте максимум 240px, ширина не важна. Идеально: квадрат 240x240 c белым фоном"></a>
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
							<a href="#" data-ag="modal-oneclick" class="ti-buy__oneclick">Купить в 1 клик</a>
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
							<a href="#" data-ag="modal-oneclick" class="ti-buy__oneclick">Купить в 1 клик</a>
						</div>
					</footer>
				</div>
			</div>

			<div class="grid-4 grid-6_l grid-12_s">
				<div class="ti">
					<header>
						<a href="/catalog-detail-no.php"><img src="/images/thumbs/intro1.jpg" alt="bag"></a>
					</header>
					<main>
						<span class="ti__price">3 000 руб.</span>
						<h5 class="ti__name"><a href="/catalog-detail-no.php">Сумка женская экокожа</a></h5>
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
						<a href="/catalog-detail.php"><img src="/images/thumbs/intro1.jpg" alt="По высоте максимум 240px, ширина не важна. Идеально: квадрат 240x240 c белым фоном"></a>
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
							<a href="#" data-ag="modal-oneclick" class="ti-buy__oneclick">Купить в 1 клик</a>
						</div>
					</footer>
				</div>
			</div>

			<div class="grid-4 grid-6_l grid-12_s">
				<div class="ti">
					<header>
						<div class="ti-labels">
							<a href="/catalog-detail.php" class="ti-label ti-label--orange">NEW</a>
						</div>
						<a href="#"><img src="/images/thumbs/intro6.jpg" alt="По высоте максимум 240px, ширина не важна. Идеально: квадрат 240x240 c белым фоном"></a>
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
							<a href="#" data-ag="modal-oneclick" class="ti-buy__oneclick">Купить в 1 клик</a>
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
						<a href="/catalog-detail.php"><img src="/images/thumbs/intro5.jpg" alt="По высоте максимум 240px, ширина не важна. Идеально: квадрат 240x240 c белым фоном"></a>
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
							<a href="#" data-ag="modal-oneclick" class="ti-buy__oneclick">Купить в 1 клик</a>
						</div>
					</footer>
				</div>
			</div>

			<div class="grid-4 grid-6_l grid-12_s">
				<div class="ti">
					<header>
						<a href="/catalog-detail-no.php"><img src="/images/thumbs/intro4.jpg" alt="По высоте максимум 240px, ширина не важна. Идеально: квадрат 240x240 c белым фоном"></a>
					</header>
					<main>
						<span class="ti__price">3 000 руб.</span>
						<h5 class="ti__name"><a href="/catalog-detail-no.php">Сумка женская экокожа</a></h5>
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
						<a href="/catalog-detail-no.php"><img src="/images/thumbs/intro1.jpg" alt="bag"></a>
					</header>
					<main>
						<span class="ti__price">3 000 руб.</span>
						<h5 class="ti__name"><a href="/catalog-detail-no.php">Сумка женская экокожа</a></h5>
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
						<a href="/catalog-detail.php"><img src="/images/thumbs/intro1.jpg" alt="По высоте максимум 240px, ширина не важна. Идеально: квадрат 240x240 c белым фоном"></a>
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
							<a href="#" data-ag="modal-oneclick" class="ti-buy__oneclick">Купить в 1 клик</a>
						</div>
					</footer>
				</div>
			</div>

			<div class="grid-4 grid-6_l grid-12_s">
				<div class="ti">
					<header>
						<div class="ti-labels">
							<a href="/catalog-detail.php" class="ti-label ti-label--orange">NEW</a>
						</div>
						<a href="#"><img src="/images/thumbs/intro6.jpg" alt="По высоте максимум 240px, ширина не важна. Идеально: квадрат 240x240 c белым фоном"></a>
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
							<a href="#" data-ag="modal-oneclick" class="ti-buy__oneclick">Купить в 1 клик</a>
						</div>
					</footer>
				</div>
			</div>

		</section>

		<section class="page-nav">
			<div class="page-nav-itemcounter">
				<span>Товаров:</span>
				<span class="page-nav-itemcounter__num">6673</span>
			</div>

			<div class="pager">
				<a href="#" class="pager__prev" title="Предыдущая страница"></a>
				<a href="#">1</a>
				<a href="#" class="active">2</a>
				<a href="#">3</a>
				<a href="#">4</a>
				<a href="#">5</a>
				<a href="#" class="pager__next" title="Следующая страница"></a>
			</div>
		</section>

		<section class="category-description user-content">
			<h4>Женская сумка</h4>
			<p>Сумка - это олицетворение внутренней сущности каждой женщины.</p>
			<p>Прекрасные девушки, милые женщины, магазин женских сумок Sabellino от групп компаний Smart-Fashion предлагает высококачественные женские сумки в широком ассортименте.</p>
			<p>Сумки женские - это не просто красивый аксессуар, они могут многое рассказать о своей владелице. Это психологический портрет ее обладательницы, своеобразная энциклопедия жизни.</p>
			<p>В интернет магазине Sabellino можно купить сумку женскую, как для повседневного использования, так и для экстравагантных вечерних мероприятий. Сумки женские кожаные, а также из экокожи – приобретаете не выходя из дома.</p>
			<p>Также мы предоставляем возможность купить женские сумки оптом. Ассортимент магазина пополняется ежемесячно новыми коллекциями сумок, что позволяет покупателю всегда найти на наших прилавках самые современные, актуальные и модные модели.</p>
			<p>Теперь, Вам дорогие женщины, не нужно посещать большое количество магазинов, если потребуется новая сумочка. Просто загляните в наш магазин и вы несомненно найдите лучшую модель сумки для себя.</p>
		</section>
	</main>

</div><!--catalog-wrapper end-->

<?php include('footer.php'); ?>
