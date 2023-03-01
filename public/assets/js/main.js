(function($){
	
    "use strict";
		/*
    |--------------------------------------------------------------------------
    | Template Name: Edugarden
    | Author: Themes_Family
    | Template Name: Mutali - Education & Online Course HTML5 Website Template
    | Version: 1.0.0
    |--------------------------------------------------------------------------
    |--------------------------------------------------------------------------
    | TABLE OF CONTENTS:
    |--------------------------------------------------------------------------
    |
    | 1. Scripts initialization
    | 2. Dynamic Background
    | 3. Mobile Menu
    | 4. Sticky Header
    | 5. One Page Navigation
    | 6. Slick Slider
    | 7. Modal Video
    | 8. Hobble Effect
    | 9. Mailchimp
    | 10. Hero Slides
    | 11. Testimonial
    | 12. Blog Slider
    | 13. Blog Slider1
    | 14. Tabs 
    | 15. Counter
    | 16. Popup Gallery
    | 17. Scroll animation
    | 18. wow Animation
    | 
    |
    |--------------------------------------------------------------------------
    */
	
	 /*--------------------------------------------------------------
      1. Scripts initialization
      --------------------------------------------------------------*/
    $.exists = function(selector) {
        return $(selector).length > 0;
    };
	
	//preloader
        $(".atf_book_preload").delay(2000).fadeOut(200);
        $(".loader").on('click', function() {
             $(".atf_book_preload").fadeOut(200);
        })
		
		//  Sidebar Js
		$(".atf_sidebar-toggle-btn").on("click", function () {
			$(".atf_sidebar__area").addClass("sidebar-opened");
			$(".atf_body-overlay").addClass("opened");
		});
		$(".atf_sidebar__close-btn").on("click", function () {
			$(".atf_sidebar__area").removeClass("sidebar-opened");
			$(".atf_body-overlay").removeClass("opened");
		});
		
		 // Toggle Js
		$(".atf_body-overlay").on("click", function () {
			$(".atf_sidebar__area").removeClass("sidebar-opened");
			$(".atf_body-overlay").removeClass("opened");
		});
	
		/* --------------------------------------------------------
		 Toogle Search
		-------------------------------------------------------- */
		// Handle click on toggle search button
		$('.header-search').on('click', function() {
			$('.header-search, .header-search-form').toggleClass('search-open');
			return false;
		});
	
    $(window).on("load", function() {
        $(window).trigger("scroll");
        $(window).trigger("resize");
        // preloaderSetup();
    });
	
    $(document).on("ready", function() {
        $(window).trigger("resize");
        dynamicBackground();
        slickInit();
        stickyHeader();
        onePageNavigation();
        mobileMenu();
        mailchimpInit();
        heroslideInit();
        testimonialInit();
        gallerylInit();
        blogsliderInit();
        tabcontentInit();
        countInit();
        popupInit();
        backtotopInit();
        wowInit();
    });

    $(window).on("scroll", function() {
        stickyHeader();
        
	});	
		
	 /*--------------------------------------------------------------
      2. Dynamic Background
      --------------------------------------------------------------*/

    function dynamicBackground() {
        // Background images
        $('.atf-dynamic-bg').each(function() {
            var src = $(this).attr('data-src');
            $(this).css({
                'background-image': 'url(' + src + ')'
            });
        });
    }
	
	 /*--------------------------------------------------------------
      3. Mobile Menu
      --------------------------------------------------------------*/
    function mobileMenu() {
        $('.atf-nav').append('<span class="atf-munu-toggle"><span></span></span>');
        $('.menu-item-has-children').append('<span class="atf-munu-dropdown-toggle"></span>');
        $('.atf-munu-toggle').on('click', function() {
            $(this).toggleClass("atf-toggle-active").siblings('.atf-nav-list').slideToggle();;
        });
        $('.atf-munu-dropdown-toggle').on('click', function() {
            $(this).toggleClass('active').siblings('ul').slideToggle();
        });
    }
    /*--------------------------------------------------------------
      4. Sticky Header
      --------------------------------------------------------------*/
    function stickyHeader() {
        var scroll = $(window).scrollTop();
        if (scroll >= 10) {
            $('.atf-sticky-header').addClass('atf-sticky-active');
        } else {
            $('.atf-sticky-header').removeClass('atf-sticky-active');
        }
    }
	
	    /*--------------------------------------------------------------
      5. One Page Navigation
      --------------------------------------------------------------*/
    function onePageNavigation() {
        // Click To Go Top
        $('.atf-smooth-move').on('click', function() {
            var thisAttr = $(this).attr('href');
            if ($(thisAttr).length) {
                var scrollPoint = $(thisAttr).offset().top - 50;
                $('body,html').animate({
                    scrollTop: scrollPoint
                }, 800);
            }
            return false;
        });

        // One Page Active Class
        var topLimit = 300,
            ultimateOffset = 200;

        $('.atf-onepage-nav').each(function() {
            var $this = $(this),
                $parent = $this.parent(),
                current = null,
                $findLinks = $this.find("a");

            function getHeader(top) {
                var last = $findLinks.first();
                if (top < topLimit) {
                    return last;
                }
                for (var i = 0; i < $findLinks.length; i++) {
                    var $link = $findLinks.eq(i),
                        href = $link.attr("href");

                    if (href.charAt(0) === "#" && href.length > 1) {
                        var $anchor = $(href).first();
                        if ($anchor.length > 0) {
                            var offset = $anchor.offset();
                            if (top < offset.top - ultimateOffset) {
                                return last;
                            }
                            last = $link;
                        }
                    }
                }
                return last;
            }

            $(window).on("scroll", function() {
                var top = window.scrollY,
                    height = $this.outerHeight(),
                    max_bottom = $parent.offset().top + $parent.outerHeight(),
                    bottom = top + height + ultimateOffset;

                var $current = getHeader(top);

                if (current !== $current) {
                    $this.find(".active").removeClass("active");
                    $current.addClass("active");
                    current = $current;
                }
            });
        });
    }
	/*--------------------------------------------------------------
      6. Slick Slider
      --------------------------------------------------------------*/
		function slickInit() {
        $('.atf-slider').each(function() {

            // Slick Variable
            var $ts = $(this).find('.slick-container');
            var $slickActive = $(this).find('.slick-wrapper');
            var $sliderNumber = $(this).siblings('.slider-number');

            // Auto Play
            var autoPlayVar = parseInt($ts.attr('data-autoplay'), 10);
            // Auto Play Time Out
            var autoplaySpdVar = 3000;
            if (autoPlayVar > 1) {
                autoplaySpdVar = autoPlayVar;
                autoPlayVar = 1;
            }
            // Slide Change Speed
            var speedVar = parseInt($ts.attr('data-speed'), 10);
            // Slider Loop
            var loopVar = Boolean(parseInt($ts.attr('data-loop'), 10));
            // Slider Center
            var centerVar = Boolean(parseInt($ts.attr('data-center'), 10));
            // Pagination
            var paginaiton = $(this).children().hasClass('pagination');
            // Slide Per View
            var slidesPerView = $ts.attr('data-slides-per-view');
            if (slidesPerView == 1) {
                slidesPerView = 1;
            }
            if (slidesPerView == 'responsive') {
                var slidesPerView = parseInt($ts.attr('data-add-slides'), 10);
                var lgPoint = parseInt($ts.attr('data-lg-slides'), 10);
                var mdPoint = parseInt($ts.attr('data-md-slides'), 10);
                var smPoint = parseInt($ts.attr('data-sm-slides'), 10);
                var xsPoing = parseInt($ts.attr('data-xs-slides'), 10);
            }
            // Fade Slider
            var fadeVar = parseInt($($ts).attr('data-fade-slide'));
            (fadeVar === 1) ? (fadeVar = true) : (fadeVar = false);

            // Slick Active Code
            $slickActive.slick({
                infinite: true,
                autoplay: autoPlayVar,
                dots: paginaiton,
                centerPadding: '0',
                speed: speedVar,
                infinite: loopVar,
                autoplaySpeed: autoplaySpdVar,
                centerMode: centerVar,
                fade: fadeVar,
                prevArrow: $(this).find('.slick-arrow-left'),
                nextArrow: $(this).find('.slick-arrow-right'),
                appendDots: $(this).find('.pagination'),
                slidesToShow: slidesPerView,
                responsive: [{
                        breakpoint: 1600,
                        settings: {
                            slidesToShow: lgPoint
                        }
                    },
                    {
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: mdPoint
                        }
                    },
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: smPoint
                        }
                    },
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: xsPoing
                        }
                    }
                ]
            });
        })
    }

	
	/*--------------------------------------------------------------
      9. Newsletter Subscribe
      --------------------------------------------------------------*/
       
		function mailchimpInit() {
        $('#mc-form').ajaxChimp({
            url: 'https://gmail.us10.list-manage.com/subscribe/post?u=c9af266402a277062d0d7cee0&amp;id=1211fda42f'
            /* Replace Your AjaxChimp Subscription Link */
        });        
    }; 
	
	/*--------------------------------------------------------------
      10. Hero Slides
      --------------------------------------------------------------*/

		function heroslideInit() {
        $(".hero-slides").owlCarousel({
            items: 1,
            nav: false,
            dots: true,
            touchDrag: false,
            mouseDrag: false,
            autoplay: false,
            smartSpeed: 700,
            loop: true,
            navText: [
            "<i class='icofont-rounded-left'></i>",
            "<i class='icofont-rounded-right'></i>"
            ]
        });
	}; 
	
	/*--------------------------------------------------------------
      11. Testimonial
      --------------------------------------------------------------*/  
		function testimonialInit() {
        var testimonialCarousel = $('#testimonial-slider');
            testimonialCarousel.owlCarousel({
            loop:true,
            dots:true,
            nav:false,
            responsive : {
                0 : {
                    items: 1
                },
                768 : {
                    items: 1
                },
                960 : {
                    items: 1
                },
                1200 : {
                    items: 1
                },
                1920 : {
                    items: 1
                }
            }
        }); 
	};
	
	/*--------------------------------------------------------------
      11. Start gallery Design
      --------------------------------------------------------------*/ 
		function gallerylInit() {
        if ($("#gallery-slider").length) {
            $("#gallery-slider").owlCarousel({
                autoplay:true,
                smartSpeed: 300,
                margin: 15,
                loop:true,
                autoplayHoverPause:true,
                dots: true,
                responsive: {
                    0 : {
                        items: 1
                    },
                    767 : {
                        items: 1
                    },
                    991 : {
                        items: 3
                    },
                    1200 : {
                        items: 4
                    },
                    1600 : {
                        items: 4
                    }
                }
            });
        }
	};

	
	/*--------------------------------------------------------------
      12. Blog Slider
      --------------------------------------------------------------*/  
		function blogsliderInit() {
        if ($("#atf-blog-slider-1").length) {
            $("#atf-blog-slider-1").owlCarousel({
                autoplay:true,
                smartSpeed: 300,
                margin: 15,
                loop:true,
                autoplayHoverPause:true,
                dots: true,
                responsive: {
                    0 : {
                        items: 1
                    },
                    767 : {
                        items: 1
                    },
                    991 : {
                        items: 2
                    },
                    1199 : {
                        items: 3
                    },
                    1600 : {
                        items: 4
                    }
                }
            });
        }
	};
		

	
	/*--------------------------------------------------------------
      14. Tabs
    --------------------------------------------------------------*/  
		function tabcontentInit() {
        $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');
        $('.tab ul.tabs li a').on('click', function (g) {
            var tab = $(this).closest('.tab'), 
            index = $(this).closest('li').index();
            tab.find('ul.tabs > li').removeClass('current');
            $(this).closest('li').addClass('current');
            tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
            tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();
            g.preventDefault();
        });
		
		$(document).on('mousemove', '.atf-hobble', function(event) {
            var halfW = (this.clientWidth / 2);
            var halfH = (this.clientHeight / 2);
            var coorX = (halfW - (event.pageX - $(this).offset().left));
            var coorY = (halfH - (event.pageY - $(this).offset().top));
            var degX = ((coorY / halfH) * 6) + 'deg';
            var degY = ((coorX / halfW) * -6) + 'deg';
            var degX1 = ((coorY / halfH) * -50) + 'px';
            var degY1 = ((coorX / halfW) * 50) + 'px';
            var degX2 = ((coorY / halfH) * -25) + 'px';
            var degY2 = ((coorX / halfW) * 25) + 'px';
            var degX3 = ((coorY / halfH) * 15) + 'deg';
            var degY3 = ((coorX / halfW) * -15) + 'deg';

            $(this).find('.atf-hover-layer').css('transform', function() {
                return 'perspective( 800px ) translate3d( 0, -2px, 0 ) rotateX(' + degX + ') rotateY(' + degY + ')';
            });
            $(this).find('.atf-hover-layer1').css('transform', function() {
                return 'perspective( 800px ) translate3d( 0, 0, 0 ) rotateX(' + degX + ') rotateY(' + degY + ')';
            });
            $(this).find('.atf-hover-layer4').css('transform', function() {
                return 'perspective( 800px ) translate3d( 0, 0, 0 ) rotateX(' + degX3 + ') rotateY(' + degY3 + ')';
            });
            $(this).find('.atf-hover-layer2').css('transform', function() {
                return 'perspective( 800px ) translateX(' + degX1 + ') translateY(' + degY1 + ')';
            });
            $(this).find('.atf-hover-layer3').css('transform', function() {
                return 'perspective( 800px ) translateX(' + degX2 + ') translateY(' + degY2 + ')';
            });
        }).on('mouseout', '.atf-hobble', function() {
            $(this).find('.atf-hover-layer').removeAttr('style');
            $(this).find('.atf-hover-layer1').removeAttr('style');
            $(this).find('.atf-hover-layer2').removeAttr('style');
            $(this).find('.atf-hover-layer3').removeAttr('style');
            $(this).find('.atf-hover-layer4').removeAttr('style');
        });
    };

	/*--------------------------------------------------------------
      15. Counter
    --------------------------------------------------------------*/  
		function countInit() {
        $(".counter-value").counterUp({
            delay: 20,
            time: 1500
        });
	 };
        
	/*--------------------------------------------------------------
      16. Popup Gallery
    --------------------------------------------------------------*/          
        // 
		function popupInit() {
        $('a[data-rel^=lightcase]').lightcase({
			transition: 'elastic', /* none, fade, fadeInline, elastic, scrollTop, scrollRight, scrollBottom, scrollLeft, scrollHorizontal and scrollVertical */
			swipe: true,
			maxWidth: 1170,
			maxHeight: 600,
		});
     };   
        
	/*--------------------------------------------------------------
      17. Scroll animation
    --------------------------------------------------------------*/  
		
	function backtotopInit() {	
        $(window).scroll(function() {
			if ($(this).scrollTop() >= 100) {
				$('#back_to_top').addClass('active');
				$('.back_to_top').addClass('affix');
			} else {
				$('#back_to_top').removeClass('active');
				$('.back_to_top').removeClass('affix');
			}
		});
	};
	
	/*--------------------------------------------------------------
      18. wow Animation
      --------------------------------------------------------------*/  
		function wowInit() {
        var wow = new WOW({
            mobile: false,
            offset: 60,
        });
        wow.init();
	};	



})(jQuery);