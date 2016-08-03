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
			$.ajax({
				type: "POST",
				async: true,
				url: "/send.php",
				cache: false,
				contentType: false,
				processData: false,
				data: form_data
			}).success(function(result) {
				console.log(result);
				form.parents('.agmodal').agmodal('close');
				$('#modal-spasibo').agmodal('open');
				setTimeout(function() {$('#modal-spasibo').agmodal('close');},4500);
				form.find("input[type!='hidden']").val('');
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
		overlayColor: 'rgba(44, 55, 73, 0.9)'
	});
});


$(document).ready(function(){
	$('.fancy').fancybox({
		padding: 0
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