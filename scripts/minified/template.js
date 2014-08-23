define(["jquery"], function($) {
	 $(function() {

		if ($(window).width() < 599) {
			
			/* MOBILE */
			console.log("I am a mobile");

			/* Move the social links outside the nav */
			$($('.social-links-container').contents()).appendTo('.cmp-content');
			
			/* Then display them as they are hidden by default */
			$('.social-links').css('display', 'block');

			/* Move the about content to the main content container if it's on mobile */
			$($('.cmp-navigation .about .info').contents()).appendTo('.about-page .cmp-content');
			
			/* Move the contact content to the main content container if it's on mobile */
			$($('.cmp-navigation .contact .info').contents()).appendTo('.contact-page .cmp-content');

		} else if (($(window).width() > 600) && ($(window).width() < 1024)) {
			
			/* TABLET */
			console.log("I am a tablet");

			/* Move the social links outside the nav */
			$($('.social-links-container').contents()).appendTo('.cmp-content');
			
			/* Then display them as they are hidden by default */
			$('.social-links').css('display', 'block');

			/* Move the about content to the main content container if it's on mobile */
			$($('.cmp-navigation .about .info').contents()).appendTo('.about-page .cmp-content');
			
			/* Move the contact content to the main content container if it's on mobile */
			$($('.cmp-navigation .contact .info').contents()).appendTo('.contact-page .cmp-content');

		} else if ($(window).width() > 1025) {
			
			/* DESKTOP */
			console.log("I am a desktop");

			/* Move the about content to the side navigation if it's on desktop */
			/*$($('.about-page .cmp-content').contents()).appendTo('.cmp-navigation .about .info');
			
			/* Move the contact content to the side navigation if it's on desktop */
			$($('.contact-page .cmp-content').contents()).appendTo('.cmp-navigation .contact .info');

			/*$(document).ready(function(){
	    		$('.cmp-navigation .info').addClass('visible');
			});*/

			/* Move the social links to correct position */
			$('.social-links').appendTo('.social-links-container');

			if($('body').hasClass('compost home-page')) {
				$(function(){
                	$.okvideo({ 
                    	source: '1S5ztw2FwW4',
                    	volume: 0,
                    	loop: true,
                    	hd: true,
                    	adproof: true,
                    	annotations: false
                 	});
            	});
			}

			if($('body').hasClass('compost contact-page')) {
				$(function(){
	                $.okvideo({ 
	                	source: 'FIyKBFfZsDI',
	                    volume: 0,
	                    loop: true,
	                    hd: true,
	                    adproof: true,
	                    annotations: false
	                 });
	            });
			}

			/*

			$('.cmp-navigation a').click(function(e) {
				href = $(this).attr("href");
				nav_item = href.substring("/dev/compostcreative/".length).slice(0, -1);
				loadContent(nav_item);
				history.pushState('', 'New URL: '+href, href);
				e.preventDefault();
			});

			window.onpopstate = function(event) {
				loadContent(location.pathname);
			};

			function loadContent(url){
				$.get("/dev/compostcreative/includes/" + url + ".php", function (data) {
					$("body").removeClass();
					$("body").addClass(url + '-page');
            		$(".cmp-content-container").html(data);
      			});
			}
			*/
			
		
		}
		
		/* tabs for showreels page - VFX tab */

		$('.cmp-title .vfx').on( "click", function(e) {
 			e.preventDefault();
 			$('.video-panel.animation').addClass('off');
 			$('.video-panel.vfx').removeClass('off');
 			$('.cmp-title .vfx span').removeClass('off');
 			$('.cmp-title .animation span').addClass('off');
		});

		/* tabs for showreels page - Animation tab */

		$('.cmp-title .animation').on( "click", function(e) {
 			e.preventDefault();
 			$('.video-panel.vfx').addClass('off');
 			$('.video-panel.animation').removeClass('off');
 			$('.cmp-title .animation span').removeClass('off');
 			$('.cmp-title .vfx span').addClass('off');
		});
	});
});