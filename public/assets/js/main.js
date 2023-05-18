$(function() {

	// CART

	function showCart(cart)
	{
		$('#cart-modal .modal-cart-content').html(cart);
		const cart_total_show = parseInt($('#cart-items-now').text());
		if (cart_total_show) {
			$('#cart-total-items').text(cart_total_show);
		}
		console.log(cart_total_show);

		const myModalEl = document.querySelector('#cart-modal');
		const modal = bootstrap.Modal.getOrCreateInstance(myModalEl);
		modal.show();


	}

	$('#get-cart').on('click', function (e) {
		e.preventDefault();
		$.ajax({
			url: 'cart/show',
			type: 'GET',
			success: function (res) {
				showCart(res);
			},
			error: function () {
				alert('Error!');
			}
		})

	});


	$('#input-sort').on('change', function (){
		window.location = PATH + window.location.pathname + '?' + $(this).val();
	});

	$('#input-pagination').on('change', function () {
		window.location = PATH + window.location.pathname + '?' + $('#input-sort').val() + '&' +$(this).val();
	});


	// DELETE ITEM

	$('#cart-modal .modal-cart-content').on('click', '.del-item', function (e) {
		e.preventDefault();
		const id = $(this).data('id');

		$.ajax({
			url: 'cart/delete',
			type: 'GET',
			data: {id: id},
			success: function (res) {
				showCart(res);
			},
			error: function () {
				alert('Error!');
			}
		});
	});

	// CLEAR CART

	$('#cart-modal .modal-cart-content').on('click', '#clear-cart', function () {
		$.ajax({
			url: 'cart/clear',
			type: 'GET',
			success: function (res) {
				showCart(res);
			},
			error: function () {
				alert('Error!');
			}
		});
	});

	// ADD PRODUCTS TO CART

	$('.add-to-cart').on('click', function (e) {
		e.preventDefault();
		const id = $(this).data('id');
		const qty = $('#input-quantity').val() ? $('#input-quantity').val() : 1;
		const $this = $(this);

		$.ajax({
			url: 'cart/add',
			type: 'GET',
			data: {id: id, qty: qty},
			success: function (res) {
				showCart(res);
				// $this.find('i').removeClass('fa-shopping-cart').addClass('fa-luggage-cart');
			},
			error: function () {
				alert('Error!');
			}
		})
	}); 
	
	// CART


	$('.open-search').click(function(e) {
		e.preventDefault();
		$('#search').addClass('active');
	});
	$('.close-search').click(function() {
		$('#search').removeClass('active');
	});

	$(window).scroll(function() {
		if ($(this).scrollTop() > 200) {
			$('#top').fadeIn();
		} else {
			$('#top').fadeOut();
		}
	});

	$('#top').click(function() {
		$('body, html').animate({scrollTop:0}, 700);
	});

	$('.sidebar-toggler .btn').click(function() {
		$('.sidebar-toggle').slideToggle();
	});

	$('.thumbnails').magnificPopup({
		type:'image',
		delegate: 'a',
		gallery: {
			enabled: true
		},
		removalDelay: 500,
		callbacks: {
			beforeOpen: function() {
				this.st.image.markup = this.st.image.markup.replace('mfp-figure', 'mfp-figure mfp-with-anim');
				this.st.mainClass = this.st.el.attr('data-effect');
			}
		}
	});

	$('#languages button').on('click', function () {
		const lang_code = $(this).data('langcode');
		window.location = PATH + '/language/change?lang=' + lang_code;
	})

});