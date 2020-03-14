new WOW().init();
$(document).ready(function () {

    $("html").niceScroll({
        cursorcolor: "#291238",
        cursoropacitymin: 0.4,
        cursorwidth: "10",
        background: "#dcd8e1",
        cursorborder: "none",
        cursorborderradius: 2
    });

    $('#owl-clients').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
                nav: true,
                loop: true
            },
            600: {
                items: 2,
                nav: false,
                loop: true
            },
            1000: {
                items: 4,
                nav: true,
                loop: true,
                margin: 20
            }
        }

    });


    $('#owl-mobile').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        autoplay: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true,
                loop: true
            },
            600: {
                items: 1,
                nav: false,
                loop: true
            },
            1000: {
                items: 1,
                nav: true,
                loop: true,
                margin: 20
            }
        }

    });

    // what-say-about-us 
    $('#owl-testimonial').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true,
                loop: true
            },
            600: {
                items: 1,
                nav: false,
                loop: true
            },
            1000: {
                items: 2,
                nav: true,
                loop: true,
                margin: 20
            }
        }

    });






    var position = $(window).scrollTop();

    // should start at 0

    $(window).scroll(function () {
        var scroll = $(window).scrollTop();
        if (scroll > position) {
            $("#main-navbar").removeClass("fixed-top");
            $("body").removeClass("body-fixed-navbar");
        } else {
            $("#main-navbar").addClass("fixed-top");
            $("body").addClass("body-fixed-navbar");
        }
        position = scroll;
    });
    $('#owl-services').owlCarousel({
        loop: true,
        margin: 10,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true,
                loop: true
            },
            600: {
                items: 2,
                nav: false,
                loop: true
            },
            1000: {
                items: 3,
                nav: true,
                loop: true,
                margin: 20
            }
        }

    });



    $num = $('.my-card').length;
    $even = $num / 2;
    $odd = ($num + 1) / 2;

    if ($num % 2 == 0) {
        $('.my-card:nth-child(' + $even + ')').addClass('active');
        $('.my-card:nth-child(' + $even + ')').prev().addClass('prev');
        $('.my-card:nth-child(' + $even + ')').next().addClass('next');
    } else {
        $('.my-card:nth-child(' + $odd + ')').addClass('active');
        $('.my-card:nth-child(' + $odd + ')').prev().addClass('prev');
        $('.my-card:nth-child(' + $odd + ')').next().addClass('next');
    }

    $('.my-card').click(function () {
        $slide = $('.active').width();
        console.log($('.active').position().left);

        if ($(this).hasClass('next')) {
            $('.card-carousel').stop(false, true).animate({
                left: '-=' + $slide
            });
        } else if ($(this).hasClass('prev')) {
            $('.card-carousel').stop(false, true).animate({
                left: '+=' + $slide
            });
        }

        $(this).removeClass('prev next');
        $(this).siblings().removeClass('prev active next');

        $(this).addClass('active');
        $(this).prev().addClass('prev');
        $(this).next().addClass('next');
    });


    // Keyboard nav
    $('html body').keydown(function (e) {
        if (e.keyCode == 37) { // left
            $('.active').next().trigger('click');
        } else if (e.keyCode == 39) { // right
            $('.active').prev().trigger('click');
        }
    });

    $("#next-project").click(function () {
        $('.active').next().trigger('click');
    });

    $("#prev-project").click(function () {
        $('.active').prev().trigger('click');
    });

    // back to top
    // navbar Scroll //
    $(window).scroll(function () { // check if scroll event happened
        if ($(document).scrollTop() > 0) { // check if user scrolled more than 50 from top of the browser window
            $(".navbar").css("background-color", "rgba(102, 49, 155, 0.74"); // if yes, then change the color of class "navbar-fixed-top" to white (#f8f8f8)
        } else {
            $(".navbar").css("background-color", "transparent"); // if not, change it back to transparent
        }
    });

    // ===== Scroll to Top ====
    $(window).scroll(function () {
        if ($(this).scrollTop() >= 50) { // If page is scrolled more than 50px
            $('#return-to-top').fadeIn(200); // Fade in the arrow
        } else {
            $('#return-to-top').fadeOut(200); // Else fade out the arrow
        }

    });
    $('#return-to-top').click(function () { // When arrow is clicked
        $('body,html').animate({
            scrollTop: 0 // Scroll to top of body
        }, 600);
    });


});

window.addEventListener('DOMContentLoaded', (e) => {
    $("html,body").css("overflow", "auto");
    $(".overlay").fadeOut(300);
});

// team 
$('#owl-team').owlCarousel({
    loop: true,
    dots: false,
    responsiveClass: true,
    nav: true,
    responsive: {
        0: {
            items: 1,
            nav: true,
            loop: true
        },
        600: {
            items: 2,
            nav: false,
            loop: true
        },
        1000: {
            items: 3,
            nav: true,
            loop: true,
            margin: 20
        }
    }

});

// Counter

$('.Count').counterUp({
    delay: 10,
    time: 1000
});