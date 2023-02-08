$(function () {
    $('.mainSlide').slick({
        arrows: false,
        dots: true,
        autoplaySpeed: 4000,
        pauseOnHover: false,
        pauseOnFocus: false,

    });

    $('.main_pro_slide').slick({
        arrows: false,
        slidesToShow: 5,
    });

    $('.mainProduct .arrows i:nth-child(1)').on('click', function () {
        $('.main_pro_slide').slick('slickPrev')
    });
    $('.mainProduct .arrows i:nth-child(2)').on('click', function () {
        $('.main_pro_slide').slick('slickNext')
    });



    $(window).on('scroll', function () {
        var sct = $(window).scrollTop();
        console.log(sct);

        if (sct > 700) {
            //$('.toTop').fadeIn();
            $('.toTop').addClass('on')
        } else {
            $('.toTop').removeClass('on')
        }
    });

    $('.toTop').on('click', function () {
        $('html, body').animate({ scrollTop: 0 })
    });


    $('.mopen').on('click', function () {
        $('.header').toggleClass('on')
    })

    $('.header .gnb>ul>li>a').on('click', function (e) {
        e.preventDefault();
        console.log(e, e.currentTarget, $(this));
        $('.header .gnb>ul>li .submenu').removeClass('on');
        $(this).next().addClass('on');
    })

    $('.header').on('scroll wheel touchmove', function (e) {
        if ($('.header').hasClass('on')) {
            e.preventDefault();
        }
    })


})