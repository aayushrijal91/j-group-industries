// AOS.init({ duration: 1500 });

document.querySelectorAll('a[href="#form"]').forEach(function (anchor) {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();

        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

$(window).on('scroll', () => {
    if ($(this).scrollTop() >= 600) {
        $('#return-to-top').fadeIn(300);
    } else {
        $('#return-to-top').fadeOut(300);
    }
});

$('#return-to-top').on('click', () => {
    $('body,html').animate({
        scrollTop: 0
    }, 500);
});

$('.question').on('click', function () {
    $(this).find('.downarrow').toggleClass('active');
    $(this).next('.answer').slideToggle();
});

$('#gallery_slider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    centerMode: true,
    arrows: false,
    autoplay: true,
    speed: 3000,
    autoplaySpeed: 2000,
    responsive: [
        {
            breakpoint: 540,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: "60px",
            }
        }
    ]
});

$(() => {

    var $slider = $('#testimonial_slider');
    var $progressBar = $('.progress');

    $slider.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        var calc = ((nextSlide) / (slick.slideCount - 0)) * 100;

        $progressBar
            .css('background-size', calc + '% 100%')
            .attr('aria-valuenow', calc);
    });

    $slider.slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        arrows: false,
        autoplay: true,
        speed: 3000,
        autoplaySpeed: 5000,
        // mobileFirst: true,
        responsive: [
            {
                breakpoint: 540,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1,
                }
            }
        ]
    });
});
