function initialiseCarousel(className) {
    $(className).slick({
        dots: true,
        appendDots: className + '-dots',
        dotsClass: 'carousel-dots flex flex-row',
        arrows: false,
        fade: true,
        cssEase: 'linear',
        lazyLoad: 'ondemand',
        autoplay: true,
        autoplaySpeed: 5000,
    });
}