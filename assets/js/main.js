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

		/* One Page Nav */
		$('#menu-cat').onePageNav({
			currentClass: 'current',
			changeHash: false,
			scrollSpeed: 750,
			scrollThreshold: 0.5,
			easing: 'swing',
			scrollOffset: 60
		});

		/* Magnific Image Popup
		============================*/
		$('.single-gallery').magnificPopup({
			type: 'image',
			gallery: {
				enabled: true
			}
		});

		/* Magnific Video Popup
		============================*/
		$('.video-play').magnificPopup({
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