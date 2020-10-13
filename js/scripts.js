(function ($, root, undefined) {
	$(function () {
		'use strict';
		var $element = $('.arrow-scroll');

		$(window).scroll(function() {
			if($(this).scrollTop() > 0) {
				$element.fadeOut(500);
			} else {
				$element.fadeIn(500);
			}
		});

		$(window).on("scroll", function() {
			if($(window).scrollTop() > 50) {
				$(".header").addClass("active");
			} else {
				//remove the background property so it comes transparent again (defined in your css)
			   $(".header").removeClass("active");
			}
		});

		$(window).on("scroll", function() {
			if($(window).scrollTop() > 50) {
				$(".header-logo").addClass("active");
			} else {
				//remove the background property so it comes transparent again (defined in your css)
			   $(".header-logo").removeClass("active");
			}
		});

			var switcher = $('#hero-word-switcher');
			var delay = 2000;
			var count = switcher.find('strong').length;
		
			function calculateWidths() {
				switcher.find('strong').each(function(index) {
					$(this).attr('data-width', $(this).width());
				});
				switcher.width(switcher.find('.active').attr('data-width'));
			}
			calculateWidths();
		
			$(window).resize(function() {
				calculateWidths();
			});
		
			function doChange() {
				var nextItem;
				var currentItem = parseInt(switcher.find('.active').attr('data-oid'));
		
				if (currentItem == count - 1) {
					nextItem = 0;
				} else {
					nextItem = currentItem + 1;
				}
		
				switcher.addClass('in');
		
				switcher.find('[data-oid="' + currentItem + '"]').removeClass('active');
				switcher.find('[data-oid="' + nextItem + '"]').addClass('active');
		
				switcher.width(switcher.find('[data-oid="' + nextItem + '"]').attr('data-width'));
				setTimeout(doChange, delay);
			}
		
			setTimeout(doChange, delay);
		
			$(document).ready(function() {
				$(".myvideos").on("mouseover", function(event) {
				  this.play();
			  
				}).on('mouseout', function(event) {
				  this.pause();
			  
				});
			  })


		});
	
})(jQuery, this);
