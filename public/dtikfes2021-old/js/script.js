$(document).ready(function () {
    $(window).scrollTop(0);
    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > 30) {
            $(".header").css("background-color", "white");
            $(".header").css("box-shadow", "0 2px 2px #7a7a7a3d");
            $(".logo").css("width", "70");
            $(".logo").css("height", "30");
            $(".nav-item").css("font-size", "1em");
        } else {
            $(".header").css("background-color", "transparent");
            $(".header").css("box-shadow", "none");
            $(".logo").css("width", "140");
            $(".logo").css("height", "60");
            $(".nav-item").css("font-size", "1.2em");
        }
    });
    $(function () {
        $('.slider').slick({
            arrows: false,
            infinite: true,
            slidesToShow: 2,
            autoplay: true,
            speed: 1000,
            autoplaySpeed: 2000,
            responsive: [
                {
                breakpoint: 768,
                settings: {
                    arrows: false,
                    slidesToShow: 2,
                    autoplay: true,
                    speed: 1000,
                    autoplaySpeed: 2000
                }
                },
                {
                breakpoint: 480,
                settings: {
                    arrows: false,
                    slidesToShow: 1,
                    autoplay: true,
                    speed: 1000,
                    autoplaySpeed: 2000
                }
                }
            ]
        });
        $('.slider-testi').slick({
            arrows: false,
            infinite: true,
            slidesToShow: 2,
            speed: 1000,
            autoplay: true,
            autoplaySpeed: 10000,
            responsive: [
                {
                breakpoint: 1024,
                settings: {
                    arrows: false,
                    infinite: true,
                    speed: 1000,
                    slidesToShow: 1,
                    autoplay: true,
                    autoplaySpeed: 10000
                }
                },
            ]
        });
    });
});

function scrollId(id) {
    $('html, body').animate({
        scrollTop: $(id).offset().top - $('nav').height() // Means Less header height
    },400);
}