/** @format */

(function ($) {
	'use strict';
	// Nav Bar Fix
	function navbarFixed() {
		if ($('.header_aria').length) {
			$(window).scroll(function () {
				var scroll = $(window).scrollTop();
				if (scroll) {
					$('.header_aria').addClass('navbar_fixed');
				} else {
					$('.header_aria').removeClass('navbar_fixed');
				}
			});
		}
	}
	navbarFixed();

	// Wow Js
	new WOW().init();

	function menu_dropdown() {
		if ($(window).width() < 992) {
			$('.navbar-nav > li .mobile_dropdown_icon').on('click', function (event) {
				event.preventDefault();
				$(this).parent().find('.dropdown-menu').first().slideToggle(700);
				$(this).parent().siblings().find('.dropdown-menu').slideUp(700);
			});
		}
	}
	menu_dropdown();

	// Parallax js
	// var scene = document.getElementById('scene');
	// var parallaxInstance = new Parallax(scene);
	// function parallaxEffect() {
    //     if ($("#scene").length) {
    //         $("#scene").parallax();
    //     }
    // }
    // parallaxEffect();

	// Client Slider
	$('.logo_slider').slick({
		arrows: false,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 2000,
		loop: true,
		slidesToShow: 5,
		dots: false,
		responsive: [
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 3,
				},
			},
		],
	});

	// Testimonial Slider
	$('.slider_aria').slick({
		prevArrow:
			'<button type="button" class="slick-prev"><i class="fa-solid fa-arrow-left"></i></button>',
		nextArrow:
			'<button type="button" class="slick-next"><i class="fa-solid fa-arrow-right"></i></button>',
		arrows: true,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 2000,
		loop: true,
		slidesToShow: 4,
		dots: false,
		responsive: [
			{
				breakpoint: 1024,
				settings: {
					slidesToShow: 3,
				},
			},
			{
				breakpoint: 768,
				settings: {
					slidesToShow: 1,
				},
			},
		],
	});

	// Testimonial Grid Slider
	$('.grid_items_aria').slick({
		arrows: false,
		infinite: true,
		autoplay: true,
		autoplaySpeed: 2000,
		loop: true,
		slidesToShow: 1,
		dots: false,
	});

	/*-------------------------------------------------------------------------------
	  Counter js
	-------------------------------------------------------------------------------*/
	function counterUp() {
		if ($('.counter').length) {
			$('.counter').counterUp({
				delay: 1,
				time: 500,
			});
		}
	}

	counterUp();

	//    Progress-bar....//
	$('.single_items').each(function () {
		$(this).waypoint(
			function () {
				var progressBar = $('.progress-bar');
				progressBar.each(function (indx) {
					$(this).css('width', $(this).attr('aria-valuenow') + '%');
				});
			},
			{
				triggerOnce: true,
				offset: 'bottom-in-view',
			}
		);
	});

	//   Magnific Popup
	$(document).ready(function () {
		$('.play_btn,.popup-youtube').magnificPopup({
			type: 'iframe',
		});
	});

	//   Circular Progress
	$(function () {
		$('.chart').easyPieChart({
			size: 160,
			barColor: '#AA46BD',
			scaleLength: 0,
			lineWidth: 4,
			trackColor: '#E6E6E7',
			lineCap: 'circle',
			animate: 2000,
		});

		$('.chart2').easyPieChart({
			size: 160,
			barColor: '#F37514',
			scaleLength: 0,
			lineWidth: 4,
			trackColor: '#E6E6E7',
			lineCap: 'circle',
			animate: 2000,
		});
		$('.chart3').easyPieChart({
			size: 160,
			barColor: '#0DAA5E',
			scaleLength: 0,
			lineWidth: 4,
			trackColor: '#E6E6E7',
			lineCap: 'circle',
			animate: 2000,
		});
	});

	// Nice Select

	if ($('select').length) {
		$('select').niceSelect();
	}

	//   Search js

	$('.search a').on('click', function () {
		if ($(this).parent().hasClass('open')) {
			$(this).parent().removeClass('open');
		} else {
			$(this).parent().addClass('open');
		}
		return false;
	});
})(jQuery);
