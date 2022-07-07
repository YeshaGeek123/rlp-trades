jQuery(document).ready(function($) {

    var window_size = jQuery(window).width();
    new WOW().init();
    var currentRequest = null;
    jQuery(".gallery-tab li").on("click", function() {
        var slug = jQuery(this).attr('data-id');
        jQuery(".gallery-tab li").removeClass('active-gallery-tab');
        jQuery(this).addClass('active-gallery-tab');
        jQuery(".gallery-loader").css("display", "flex");

        currentRequest = $.ajax({
            type: 'POST',
            url: custom_call.ajaxurl,
            data: {
                'action': 'gallery_tabbing',
                'id': slug,
            },
            dataType: 'text',
            success: function(data) {
                console.log(data);
                // jQuery(".main-slider").slick('unslick');
                // jQuery(".gallery-box").html(data);
                // jQuery(".gallery-loader").css("display", "none");
                // gallery_slider();
            }
        });
    });



    /* FAQ Page accordion */
    jQuery('.accordion .faq-content').hide();
    jQuery('.accordion > div:eq(0) h3').addClass('active-faq');
    jQuery('.accordion > div:eq(0) .faq-content').slideDown();

    jQuery('.accordion h3').click(function(j) {
        var dropDown = jQuery(this).closest('div').find('.faq-content');
        jQuery(this).closest('.accordion').find('.faq-content').not(dropDown).slideUp();
        if (jQuery(this).hasClass('active-faq')) {
            jQuery(this).removeClass('active-faq');
        } else {
            jQuery(this).closest('.accordion').find('h3.active-faq').removeClass('active-faq');
            jQuery(this).addClass('active-faq');
        }
        dropDown.stop(false, true).slideToggle();
        j.preventDefault();
    });


    //Service tabbing Slider
    jQuery('.services-tabbing-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows: true,
        // autoplay: false,
        // autoplaySpeed: 4000,
        prevArrow: '<button class="slide-arrow prev-arrow"><i class="fas fa-chevron-left"></i></button>',
        nextArrow: '<button class="slide-arrow next-arrow"><i class="fas fa-chevron-right"></i></button>',
        customPaging: function(slider, i) {
            return jQuery(slider.$slides[i])
                .find(".dot-title")
                .attr("title");
        },
        appendDots: jQuery(".custom-dot-slider"),
        dotsClass: "dropdown-tabbing",
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: true,
                arrows: false,
            }
        }],
    });

    //Review Slider
    jQuery('.review-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: true,
        rows: 0,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
                dots: false,
                autoplay: true,
                autoplaySpeed: 2000,
            }
        }]
    });

    //Gallery Slider
    jQuery('.gallery-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: true,
        autoplay: true,
        swipeToSlide: true,
        prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                    infinite: true,
                    arrows: false,
                    dots: false,
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    arrows: false,
                    dots: false,
                }
            }
        ]
    })


    // FANCY BOX
    jQuery().fancybox({
        selector: '.gallery-slider a',
        "afterShow": function() {
            jQuery('.gallery-slider').slick('slickPause');
        },

        "afterClose": function() {
            jQuery('.gallery-slider').slick('slickPlay');
        }
    });



    jQuery('.plans-slider').slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        infinite: true,
        dots: true,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2,
                    infinite: true,
                    dots: true,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                }
            }
        ]
    });

    jQuery('.team-slider').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: true,
        autoplay: true,
        autoplaySpeed: 2000,
        prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
        responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                    autoplay: true,
                    autoplaySpeed: 2000,
                }
            }
        ]
    });


    setTimeout(function() {
        jQuery("#sbi_images").slick({
            slidesToShow: 4,
            slidesToScroll: 1,
            draggable: true,
            rows: 1,
            swipeToSlide: true,
            dots: false,
            arrows: true,
            autoplay: true,
            autoplaySpeed: 2000,
            infinite: true,
            prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
            nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
            responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: false,
                    rows: 1,
                }
            }]
        });
    }, 1000);


    /* Scroll To Top JS */
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > 100) {
            jQuery('#scrollToTop').fadeIn();
        } else {
            jQuery('#scrollToTop').fadeOut();
        }
    });
    jQuery('#scrollToTop').click(function() {
        jQuery("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });

    /* Sticky Header JS */
    jQuery(window).scroll(function() { // this will work when your window scrolled.
        var height = jQuery(window).scrollTop(); //getting the scrolling height of window
        if (height > 100) {
            jQuery(".site-header").addClass("sticky_head");
        } else {
            jQuery(".site-header").removeClass("sticky_head");
        }
    });

    /* Mobile Menu JS */
    jQuery("#menu-item-21 a").first().attr('href', 'javascript:void(0);');
    jQuery("#main-menu .menu-item a").click(function() {
        jQuery("#site-navigation").removeClass("toggled");
    });

    /*Quote Modal JS */
    jQuery("#quoteModal").on('show.bs.modal', function() {
        var scrolly = window.scrollY;
        jQuery("body").css("top", "-" + scrolly + "px");
        jQuery(this).attr("data-top", scrolly);
    });
    jQuery('#quoteModal').on('hidden.bs.modal', function() {
        var scrolly = jQuery(this).attr("data-top");
        jQuery("body").css("top", "0px");
        window.scrollTo(0, scrolly);
    });

    /* SEO Page Read More JS */
    jQuery('#read-more').click(function() {
        jQuery('.excerpt-content').css({ 'max-height': 'unset' });
        jQuery(this).hide();
    });

    /*SEO Menu JS */
    jQuery('#view_all_services').click(function() {
        jQuery('.all-services').slideToggle(500);
        jQuery('.all-services').css('display', 'block');
    });


});
/* Gallery Slider */
function gallery_slider() {
    jQuery('.main-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: true,
        dots: false,
        arrows: false,
        draggable: false,
        prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
        nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
        responsive: [{
            breakpoint: 992,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        }]
    });
}

/* Window Load and Resize JS */
jQuery(window).on('load resize', function() {
    var window_size = jQuery(window).width();
    if (window_size <= 991) {

        jQuery('body').on('click', '#primary-menu .menu-item-has-children', function() {
            if ((jQuery(this).hasClass('active-sub-menu'))) {
                jQuery(this).removeClass('active-sub-menu');
                jQuery(this).find('.sub-menu').css('display', 'none');
            } else {
                jQuery(".menu-item-has-children").removeClass('active-sub-menu');
                jQuery(".sub-menu").css('display', 'none');
                jQuery(this).addClass('active-sub-menu');
                jQuery(this).find('.sub-menu').css('display', 'block');
            }
        });

        jQuery('.say-about-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
            dots: false,
            arrows: false,
            autoplay: true,
            autoplaySpeed: 4000,
            prevArrow: '<button class="slide-arrow prev-arrow"><i class="fa fa-angle-left" aria-hidden="true"></i></button>',
            nextArrow: '<button class="slide-arrow next-arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></button>',
            responsive: [{
                breakpoint: 992,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    infinite: true,
                    dots: false,
                    arrows: true,
                }
            }]
        });

    } else {
        jQuery('.say-about-slider').slick('destroy');
    }
});