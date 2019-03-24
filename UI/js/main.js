$(function() {
    // Start of use strict
 
   // Smooth scrolling using jQuery easing
   $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
     if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
       var target = $(this.hash);
       target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
       if (target.length) {
         $('html, body').animate({
           scrollTop: (target.offset().top - 54)
         }, 1000, "easeInOutExpo");
         return false;
       }
     }
   });

   $("#intro-carousel").owlCarousel({
    autoplay: true,
    dots: false,
    loop: true,
    animateOut: 'fadeOut',
    items: 1
    });

   $(".catalogue-carousel").owlCarousel({
     autoplay: true,
     dots: true,
     loop: true,
     responsive: {
         0: {
             items: 2
         },
         768: {
             items: 3
         },
         900: {
             items: 4
         }
     }
    });

    $(".partners-carousel").owlCarousel({
        autoplay: true,
        dots: true,
        loop: true,
        responsive: {
            0: {
                items: 2
            },
            768: {
                items: 4
            },
            900: {
                items: 6
            }
        }
    });
 
 }); // End of use strict
 