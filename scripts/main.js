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

$('#bannerSlider').slick({
    slidesToShow: 2,
    slidesToScroll: 1,
    arrows: false,
    responsive: [
        {
            breakpoint: 540,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: '20px',
                infinite: false,
            }
        }
    ]
});

$('#brandSlider').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: false,
    responsive: [
        {
            breakpoint: 540,
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: '20px',
                autoplay: true,
                speed: 2000,
                autoplaySpeed: 0,
                cssEase: 'linear'
            }
        }
    ]
});

$('#servicesSlider').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    arrows: false,
    centerMode: true,
    centerPadding: "200px",
    autoplay: true,
    responsive: [
        {
            breakpoint: 540,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                centerMode: true,
                centerPadding: "20px",
            }
        }
    ]
});

$(() => {
    $('.accordion .accordion-card .question').on('click', function () {
        $('.accordion .accordion-card').removeClass('active');
        $(this).parents('.accordion-card').addClass('active');
    })

    if ($(window).width() < 900) {
        $('.testimonialSlider').slick({
            slidesToShow: 2,
            slidesToScroll: 1,
            centerMode: true,
            centerPadding: "30px",
            adaptiveHeight: true,
            arrows: false,
            responsive: [
                {
                    breakpoint: 540,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        centerMode: true,
                        centerPadding: "20px",
                        adaptiveHeight: true,
                    }
                }
            ]
        })
    }
})