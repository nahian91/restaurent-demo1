(function ($) {
	"use strict";

	jQuery(document).ready(function ($) {
		
		/* Slider Item Slide
		============================*/
		$(".slider").owlCarousel({
			items: 1,
			autoplay: true,
			loop: true,
			nav: false,
			dots: true,
			smartSpeed: 500
		});
		
		/* Testimonials Itesm Slide
		============================*/
		$(".testimonials").owlCarousel({
			items: 3,
			autoplay: true,
			loop: true,
			margin: 30,
			nav: false,
			dots: true,
			center: true,
			responsive: {
				0: {
					items: 1,
				},
				600: {
					items: 3,
				},
				1000: {
					items: 3,
				}
			}
		});


		/* Counter Up Active
		============================*/
		$('.counter').counterUp({
			delay: 10,
			time: 1000
		});


		/* Magnific Image Popup
		============================*/
		$('.gallery').magnificPopup({
			type: 'image',
			gallery: {
				enabled: true
			}
		});
		
		/* Magnific Video Popup
		============================*/
		$('.video-popup').magnificPopup({
			type: 'iframe'
		});


	});


	jQuery(window).load(function () {

		/* Sticky Header
		============================*/
		$(window).on('scroll', function () {
			if ($(this).scrollTop() > 20) {
				$('.header-fixed').addClass("sticky");
			} else {
				$('.header-fixed').removeClass("sticky");
			}
		});
	});
}(jQuery));