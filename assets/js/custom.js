jQuery(document).ready(function($) {

    var window_size = jQuery(window).width();
    new WOW().init();
    var currentRequest = null;

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
                arrows: false,
                dots: true,
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
                    slidesToShow: 2,
                    slidesToScroll: 1,
                    infinite: true,
                    arrows: true,
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
    jQuery('#primary-menu .menu-item a').click(function() {
        jQuery("#site-navigation").removeClass("toggled");
    });


    // Service tabbing Slider
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
            },
            {
                breakpoint: 992,
                settings: "unslick"
            }
        ],
    });


    if (window_size <= 991) {
        /* FAQ Page accordion */
        jQuery('.accordian .service-content').hide();
        jQuery('.accordian > div:eq(0) .service-accordian-title').addClass('active');
        jQuery('.accordian > div:eq(0) .service-content').slideDown();

        jQuery('.service-accordian-title').click(function(j) {
            var dropDown = jQuery(this).closest('.service-box').find('.service-content');
            jQuery(this).closest('.accordian').find('.service-content').not(dropDown).slideUp();
            if (jQuery(this).hasClass('active')) {
                jQuery(this).removeClass('active');
            } else {
                jQuery(this).closest('.accordian').find('.service-accordian-title.active').removeClass('active');
                jQuery(this).addClass('active');
            }
            dropDown.stop(false, true).slideToggle();
            j.preventDefault();
        });
    }




});


/* Window Load and Resize JS */
//jQuery(window).on('load resize', function() {

//var window_size = jQuery(window).width();

//if (window_size <= 991) {
// /* FAQ Page accordion */
// jQuery('.accordian .service-content').hide();
// jQuery('.accordian > div:eq(0) .service-accordian-title').addClass('active');
// jQuery('.accordian > div:eq(0) .service-content').slideDown();

// jQuery('.service-accordian-title').click(function(j) {
//     var dropDown = jQuery(this).closest('.service-box').find('.service-content');
//     jQuery(this).closest('.accordian').find('.service-content').not(dropDown).slideUp();
//     if (jQuery(this).hasClass('active')) {
//         jQuery(this).removeClass('active');
//     } else {
//         jQuery(this).closest('.accordian').find('.service-accordian-title.active').removeClass('active');
//         jQuery(this).addClass('active');
//     }
//     dropDown.stop(false, true).slideToggle();
//     j.preventDefault();
// });

//jQuery(".services-tabbing-slider").not('.slick-initialized').slick('destroy');
// $slick_class = jQuery('.services-tabbing-slider');
// if ($slick_class.hasClass('slick-initialized')) {
//     $slick_class.slick('destroy');
// }

//}


//});