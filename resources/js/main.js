(function ($) {
    "use strict";

    // Firebase Analytics - will be available globally
    let firebaseAnalytics = null;

    // Initialize Firebase Analytics when available
    if (window.firebaseAnalytics) {
        firebaseAnalytics = window.firebaseAnalytics;
    }

    // Spinner
    var spinner = function () {
        setTimeout(function () {
            if ($('#spinner').length > 0) {
                $('#spinner').removeClass('show');
            }
        }, 1);
    };
    spinner(0);
    
    
    // Initiate the wowjs
    new WOW().init();

    // Track page load completion
    $(window).on('load', function() {
        if (firebaseAnalytics) {
            firebaseAnalytics.trackUserEngagement('page_load_complete', {
                page_name: window.location.pathname,
                load_time: performance.now()
            });
        }
    });

    // Track button clicks globally
    $(document).on('click', 'button, .btn, a[href]', function() {
        if (firebaseAnalytics) {
            const buttonText = $(this).text().trim() || $(this).attr('class') || 'unknown_button';
            const buttonType = $(this).is('button') ? 'button' : ($(this).is('a') ? 'link' : 'element');
            firebaseAnalytics.trackButtonClick(buttonText, window.location.pathname);
            firebaseAnalytics.trackUserEngagement('button_interaction', {
                button_text: buttonText,
                button_type: buttonType,
                page_name: window.location.pathname
            });
        }
    });

    // Track form submissions
    $(document).on('submit', 'form', function() {
        if (firebaseAnalytics) {
            const formName = $(this).attr('id') || $(this).attr('class') || 'unknown_form';
            firebaseAnalytics.trackFormSubmission(formName, true);
        }
    });

    // Track scroll depth
    let maxScrollDepth = 0;
    $(window).on('scroll', function() {
        const scrollTop = $(window).scrollTop();
        const docHeight = $(document).height() - $(window).height();
        const scrollPercent = Math.round((scrollTop / docHeight) * 100);
        
        if (scrollPercent > maxScrollDepth && firebaseAnalytics) {
            maxScrollDepth = scrollPercent;
            if (scrollPercent % 25 === 0) { // Track at 25%, 50%, 75%, 100%
                firebaseAnalytics.trackUserEngagement('scroll_depth', {
                    depth_percentage: scrollPercent,
                    page_name: window.location.pathname
                });
            }
        }
    });


    // Sticky Navbar
    $(window).scroll(function () {
        if ($(this).scrollTop() > 45) {
            $('.navbar').addClass('sticky-top shadow-sm');
        } else {
            $('.navbar').removeClass('sticky-top shadow-sm');
        }
    });

    // // Hero Header carousel
    // $(".header-carousel").owlCarousel({
    //     animateOut: 'slideOutDown',
    //     items: 1,
    //     autoplay: true,
    //     smartSpeed: 1000,
    //     dots: true,
    //     loop: true,
    //     nav : true,
    //     navText : [
    //         '<i class="bi bi-arrow-left"></i>',
    //         '<i class="bi bi-arrow-right"></i>'
    //     ],
    // });


    // Modal Video
    $(document).ready(function () {
        var $videoSrc;
        $('.btn-play').click(function () {
            $videoSrc = $(this).data("src");
        });

        $('#videoModal').on('shown.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc + "?autoplay=1&amp;modestbranding=1&amp;showinfo=0");
        })

        $('#videoModal').on('hide.bs.modal', function (e) {
            $("#video").attr('src', $videoSrc);
        })
    });


    // Dance Class carousel
    // $(".class-carousel").owlCarousel({
    //     autoplay: true,
    //     smartSpeed: 1500,
    //     dots: false,
    //     loop: true,
    //     margin: 25,
    //     nav : true,
    //     navText : [
    //         '<i class="fas fa-chevron-left"></i>',
    //         '<i class="fas fa-chevron-right"></i>'
    //     ],
    //     // responsiveClass: true,
    //     // responsive: {
    //     //     0:{
    //     //         items:1
    //     //     },
    //     //     576:{
    //     //         items:1
    //     //     },
    //     //     768:{
    //     //         items:2
    //     //     },
    //     //     992:{
    //     //         items:3
    //     //     },
    //     //     1200:{
    //     //         items:4
    //     //     }
    //     // }
    // });

    // blog carousel
    // $(".blog-carousel").owlCarousel({
    //     autoplay: true,
    //     smartSpeed: 1500,
    //     dots: false,
    //     loop: true,
    //     margin: 25,
    //     nav : true,
    //     navText : [
    //         '<i class="fas fa-chevron-left"></i>',
    //         '<i class="fas fa-chevron-right"></i>'
    //     ],
    //     responsiveClass: true,
    //     responsive: {
    //         0:{
    //             items:1
    //         },
    //         576:{
    //             items:1
    //         },
    //         768:{
    //             items:2
    //         },
    //         992:{
    //             items:3
    //         },
    //         1200:{
    //             items:3
    //         }
    //     }
    // });

    // // Dance Training carousel
    // $(".training-carousel").owlCarousel({
    //     autoplay: true,
    //     smartSpeed: 1000,
    //     dots: false,
    //     loop: true,
    //     margin: 25,
    //     nav : true,
    //     navText : [
    //         '<i class="fas fa-chevron-left"></i>',
    //         '<i class="fas fa-chevron-right"></i>'
    //     ],
    //     responsiveClass: true,
    //     responsive: {
    //         0:{
    //             items:1
    //         },
    //         576:{
    //             items:1
    //         },
    //         768:{
    //             items:2
    //         },
    //         992:{
    //             items:3
    //         },
    //         1200:{
    //             items:3
    //         }
    //     }
    // });


    // // team carousel
    // $(".team-carousel").owlCarousel({
    //     autoplay: true,
    //     smartSpeed: 1000,
    //     dots: false,
    //     loop: true,
    //     margin: 25,
    //     nav : true,
    //     navText : [
    //         '<i class="fas fa-chevron-left"></i>',
    //         '<i class="fas fa-chevron-right"></i>'
    //     ],
    //     responsiveClass: true,
    //     responsive: {
    //         0:{
    //             items:1
    //         },
    //         576:{
    //             items:1
    //         },
    //         768:{
    //             items:2
    //         },
    //         992:{
    //             items:3
    //         },
    //         1200:{
    //             items:4
    //         }
    //     }
    // });


    // // testimonial carousel
    // $(".testimonial-carousel").owlCarousel({
    //     autoplay: true,
    //     smartSpeed: 1000,
    //     dots: false,
    //     loop: true,
    //     margin: 25,
    //     nav : true,
    //     navText : [
    //         '<i class="fas fa-chevron-left"></i>',
    //         '<i class="fas fa-chevron-right"></i>'
    //     ],
    //     responsiveClass: true,
    //     responsive: {
    //         0:{
    //             items:1
    //         },
    //         576:{
    //             items:1
    //         },
    //         768:{
    //             items:2
    //         },
    //         992:{
    //             items:3
    //         },
    //         1200:{
    //             items:3
    //         }
    //     }
    // });


    // // Facts counter
    // $('[data-toggle="counter-up"]').counterUp({
    //     delay: 5,
    //     time: 2000
    // });


    
   // Back to top button
   $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
        $('.back-to-top').fadeIn('slow');
    } else {
        $('.back-to-top').fadeOut('slow');
    }
    });
    $('.back-to-top').click(function () {
        $('html, body').animate({scrollTop: 0}, 1500, 'easeInOutExpo');
        return false;
    });


   

})(jQuery);

