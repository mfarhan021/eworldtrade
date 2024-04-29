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
    $('.owl-cate').owlCarousel({
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
                items:2,
            },
            600:{
                items:2,

            },
            1000:{
                items:6,
            },
            1200:{
                items:6,
            },
            500:{
                items: 2,
            }
        }
    });
    $('.owl-prod2').owlCarousel({
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
                items:2,
            },
            600:{
                items:2,
            },
            1000:{
                items:6,
            },
            1200:{
                items:6,
            },
            500:{
                items: 2,
            }
        }
    });
    $('.owl-region').owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        margin:20,
        autoplay: true,
        autoplaySpeed: 3000,
        autoplayHoverPause: false,
        responsiveClass:true,
        responsive:{
            0:{
                items:4,
            },
            600:{
                items:4,
            },
            1000:{
                items:6,
            },
            1200:{
                items:8,
            },
            500:{
                items: 4,
            }
        }
    });
    $('.owl-testimonial').owlCarousel({
        loop:true,
        nav:true,
        dots:false,
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
                items:1,
            },
            1000:{
                items:1,
            },
            1200:{
                items:1,
            },
            500:{
                items: 1,
            }
        }
    });
    $('.owl-read').owlCarousel({
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
                items:1,
            },
            1000:{
                items:1,
            },
            1200:{
                items:1,
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
    $('.owl-catpage').owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        margin:20,
        autoplay: true,
        autoplaySpeed: 3000,
        autoplayHoverPause: false,
        responsiveClass:true,
        navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            1000:{
                items:6,
            },
            1200:{
                items:6,
            },
            500:{
                items: 1,
            }
        }
    });
    $('.owl-productitem').owlCarousel({
        loop:true,
        nav:true,
        dots:false,
        margin:20,
        autoplay: true,
        autoplaySpeed: 3000,
        autoplayHoverPause: false,
        responsiveClass:true,
        navText: ["<i class='fa fa-chevron-left'></i>","<i class='fa fa-chevron-right'></i>"],
        responsive:{
            0:{
                items:1,
            },
            600:{
                items:2,
            },
            1000:{
                items:6,
            },
            1200:{
                items:6,
            },
            500:{
                items: 1,
            }
        }
    });
});


