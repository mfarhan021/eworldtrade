$(document).ready(function() {
    $('.owl-homeslide1').owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        lazyLoad:true,
        margin:0,
        responsiveClass:true,
        autoplay:true,
        autoplayTimeout:5000,
        autoplaySpeed: 500,
        items:1
    });
    $('.owl-premsupp').owlCarousel({
        loop:true,
        nav:false,
        dots:true,
        margin:20,
        autoplay: true,
        autoplaySpeed: 3000,
        autoplayHoverPause: false,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            1000:{
                items:3,
            },
            1200:{
                items:3,
            },
            500:{
                items: 1,
            }
        }
    });
    $('.owl-core').owlCarousel({
        items: 1,
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        autoplay:true,
        smartSpeed: 900,
        navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
    });
    $('.owl-trust').owlCarousel({
        items: 1,
        loop: true,
        margin: 0,
        nav: false,
        dots: false,
        autoplay:true,
        smartSpeed: 900,
        navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"]
    });
});


