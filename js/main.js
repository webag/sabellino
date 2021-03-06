$(document).ready(function(){
	var form = $(".ajax-form");
	form.on("submit", function(event) {
		var send = true;
		event.preventDefault();

		$(this).find("[data-req='true']").each(function(){
			if ($(this).val() === "") {
				$(this).addClass('error');
				send = false;
			}
		});

		$(this).find("[data-req='true']").on('focus', function(){
			$(this).removeClass('error');
		});

		var form_data = new FormData(this);

		$("[data-label]").each(function () {
			var input_name = $(this).attr('name');
			var input_label__name = input_name + '_label';
			var input_label__value = $(this).data('label');
			form_data.append(input_label__name,input_label__value)
		});

		if (send === true) {
            form.parents('.agmodal').agmodal('close');
			$.ajax({
				type: "POST",
				async: true,
				url: "/bitrix/templates/sabellino/php/send.php",
				cache: false,
				contentType: false,
				processData: false,
				data: form_data
			}).success(function(result) {
				$('#modal-spasibo').agmodal('open');
				form.find("input[type!='hidden']").val('');
                if (result)
                    $('body').append(result);
			});
		}
	});
});


jQuery(function($){
	$("input[type='tel']").mask("+7 (999) 999-99-99");
});


$(document).ready(function(){
	$('.agmodal').agmodal({
		effect: 'fade',
		overlayColor: 'rgba(50, 50, 50, 0.6)'
	});
	$('.modal-close').on('click',function (e) {
		e.preventDefault();
		$(this).parents('.agmodal').agmodal('close');
		return false;
	})
});


$(document).ready(function(){
	$('.fancy').fancybox({
		padding: 0
	});
	$('.fancy-video').fancybox({
		padding: 0,
		width: 1600,
		height: 900,
		aspectRatio: true,
		scrolling: 'no',
		helpers:  {
			title:  null
		}
	});
});


// mobile-menu
$(document).ready(function(){
	$('.menu-btn').click(function(event) {
		$(this).toggleClass('active');
		$('.mobile-menu').toggleClass('opened');
	});

	$('.mobile-menu .has-sub__title').click(function(event) {
		$('.mobile-menu .has-sub__title').not($(this)).removeClass('opened');
		$(this).toggleClass('opened');
		$('.mobile-menu').find('.sub-menu').not($(this).siblings('.sub-menu')).slideUp();
		$(this).siblings('.sub-menu').slideToggle();
	});
});
// mobile-menu


// home-slider
$(document).ready(function(){
	$('.home-slider').flickity({
		cellAlign: 'left',
		contain: true,
		adaptiveHeight: true,
		imagesLoaded: true,
		pageDots: false,
		arrowShape: {
			x0: 30,
			x1: 50, y1: 40,
			x2: 60, y2: 40,
			x3: 40
		}
	});
});
// home-slider


// открытие подменю категорий
$(document).ready(function(){
	$('.cats-menu__has-sub i').click(function() {
		var current_razdel = $(this).parent('.cats-menu__has-sub');
		current_razdel.toggleClass('opened');
	});
});
// открытие подменю категорий


// price_slider
$(document).ready(function(){
	$("#price_slider").ionRangeSlider({
		type: "double",
		min: 0,
		max: 100000,
		hide_min_max: true,
		postfix: ' р.',
		grid: false,
		onChange: function (data) { // data - массив со всеми значениями слайдера цены.
			$("input.price-filter--from").val(data.from);
			$("input.price-filter--to").val(data.to);
		},
		onFinish: function (data) {
									$("input.price-filter--to").change();
									//console.log('finish');
								 },
	});
});
// price_slider


// tovar-slider
$(document).ready(function(){
	$('.tovar-big-slider').flickity({
		contain: true,
		adaptiveHeight: true,
		imagesLoaded: true,
		pageDots: false,
		arrowShape: {
			x0: 30,
			x1: 50, y1: 40,
			x2: 60, y2: 40,
			x3: 40
		}
	});

	$('.tovar-small-slider').flickity({
		cellAlign: 'left',
		contain: true,
		adaptiveHeight: false,
		imagesLoaded: true,
		pageDots: false,
		prevNextButtons: false,
		asNavFor: '.tovar-big-slider'
	});
});
// tovar-slider


// img-slider
$(document).ready(function(){
	$('.img-slider').flickity({
		contain: true,
		adaptiveHeight: true,
		imagesLoaded: true,
		pageDots: false,
		arrowShape: {
			x0: 30,
			x1: 50, y1: 40,
			x2: 60, y2: 40,
			x3: 40
		}
	});
});
// img-slider


// quantity
$(document).ready(function(){
	$('.quantity__minus').on('click',function () {
		var current_input = $(this).siblings('input');
		current_input.val(parseInt(current_input.val()) - 1);
	});
	$('.quantity__plus').on('click',function () {
		var current_input = $(this).siblings('input');
		current_input.val(parseInt(current_input.val()) + 1);
	});
});
// quantity


// tabs
$(document).ready(function(){
	$('._tabs--js a').on('click',function () {
		var index = $(this).index();
		select_tab(index);
		return false;
	});
});

function select_tab(index_tab) {
	$('._tabs--js a').removeClass('active').eq(index_tab).addClass('active');
	$('._tab--js').removeClass('visible').eq(index_tab).addClass('visible');
}
// tabs


// tabs-brands
$(document).ready(function(){
	if ($("#brand_to_show").length){
		if ($("#brand_to_show").data('brand') !== ""){
			var brand_index = $("#brand_to_show").data('brand');
			select_tab(brand_index);
			$('html,body').animate({scrollTop:$('._tabs--js').offset().top-45}, 500);
		}
	}
});
// tabs-brands


// alert-block
$(document).ready(function(){
	$('.alert-close').on('click',function () {
		$('.alert-sec').hide();
	})
});
// alert-block


// mob-catalog-btn
$(document).ready(function() {
	$('.mob-cat-btn').on('click touchstart',function (e) {
		e.preventDefault();
		$('.catalog-aside').slideToggle();
		$(this).toggleClass('opened');
	});
	$('.mob-filtr-btn').on('click touchstart',function (e) {
		e.preventDefault();
		$('.catalog-filter').slideToggle();
	})
});
// mob-catalog-btn


// b2b-video-slider
$(document).ready(function(){
	$('.b2b-video-slider').flickity({
		cellAlign: 'left',
		contain: true,
		adaptiveHeight: false,
		imagesLoaded: true,
		pageDots: false,
		arrowShape: {
			x0: 30,
			x1: 50, y1: 40,
			x2: 60, y2: 40,
			x3: 40
		}
	});
});
// b2b-video-slider


// subscribe
$(document).ready(function() {
	$('.subscribe-promo__close').on('click',function () {
		$('.subscribe-promo').addClass('is-hidden');
	});

	$('.subscribe-promo').on('click',function () {
		$('.subscribe-promo').addClass('is-hidden');
	});
});
// subscribe