
(function() {
    "use strict";

    /**
     * Easy selector helper function
     */
    const select = (el, all = false) => {
        el = el.trim()
        if (all) {
            return [...document.querySelectorAll(el)]
        } else {
            return document.querySelector(el)
        }
    }

    /**
     * Easy event listener function
     */
    const on = (type, el, listener, all = false) => {
        if (all) {
            select(el, all).forEach(e => e.addEventListener(type, listener))
        } else {
            select(el, all).addEventListener(type, listener)
        }
    }

    /**
     * Easy on scroll event listener 
     */
    const onscroll = (el, listener) => {
        el.addEventListener('scroll', listener)
    }

    /**
     * Animation on scroll
     */
    function aos_init() {
        AOS.init({
        duration: 1000,
        easing: "ease-in-out",
        once: true,
        mirror: false
        });
    }
    window.addEventListener('load', () => {
        aos_init();
    });

    /**
     * Owl Carousel
     */
    $(document).ready(function(){
        $(".slider").owlCarousel({
            autoplay: true,
            center: true,
            nav: false,
            dots: false,
            loop: true,
            animateOut: 'slideOutDown',
            animateIn: 'flipInX',
            responsiveClass: true,
            responsive:{
                0:{
                    items:1
                },
                600:{
                    items:1
                },
                1000:{
                    items:1
                }
            }
        });
    });
})();