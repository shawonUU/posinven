jQuery(function ($) {

	$('.windstripe-search-toggler').on('click', function (event) {
		event.preventDefault();
		$('body').addClass('search-active');
	});

	$('.close-search, .search-overlay').on('click', function (event) {
		event.preventDefault();
		$('body').removeClass('search-active');
	});


});