/* GNB Event */
(function($) {

    $(document).on('mouseenter focusin', '#gnb .container .menu', function() {
        $('body').addClass('gnb-opened');
    });

    $(document).on('mouseleave', '#header', function() {
        $('body').removeClass('gnb-opened');
    });

    $(document).on('click', '#header .btn-menu', function() {
        $('body').toggleClass('gnb-opened');
    });

    $(document).on('click', '#header #gnb .menu > ul > li > a', function(e) {
        if ($(this).parent().hasClass('active')) {
            $(this).parent().removeClass('active');
        } else {
            $(this).parent().siblings('.active').removeClass('active');
            $(this).parent().addClass('active');
        }
        e.preventDefault();
    });

})(jQuery);

/* Main Visual Slider */
(function($) {
    $('#visual > ul').bxSlider({
        auto: false,
        controls: true,
        prevText: '<span class="glyphicon glyphicon-menu-left"></span>',
        nextText: '<span class="glyphicon glyphicon-menu-right"></span>'
    });
})(jQuery);


(function($) {
    var onedayDefaultOptions = {
        pager: false,
        controls: true
    };
    var onedaySlider = $('.partner .slider').bxSlider(onedayDefaultOptions);

    // 이벤트 배너
    var eventsSlider = $('.partner .slider').bxSlider({
        pager: false,
        controls: true
    });

// 브라우저 리사이징 시
    $(window).on('load resize', function() {
        if ( $(this).width() >= 320 ) {
            onedaySlider.reloadSlider($.extend({
                minSlides: 2,
                maxSlides: 2,
                slideWidth: 100,
                slideMargin: 10,
                pager: false,
                controls: true},
            onedayDefaultOptions));
        }
        if ( $(this).width() >= 768 ) {
            onedaySlider.reloadSlider($.extend({
                minSlides: 3,
                maxSlides: 3,
                slideWidth: 170,
                slideMargin: 30,
                pager: false,
                controls: true},
            onedayDefaultOptions));
        }
        if ( $(this).width() >= 992 ) {
            onedaySlider.reloadSlider($.extend({
                minSlides: 3,
                maxSlides: 3,
                slideWidth: 170,
                slideMargin: 30,
                pager: false,
                controls: true},
            onedayDefaultOptions));
        }
        if ( $(this).width() >= 1230 ) {
            onedaySlider.reloadSlider($.extend({
                minSlides: 5,
                maxSlides: 5,
                slideWidth: 170,
                slideMargin: 30,
                pager: false,
                controls: true},
            onedayDefaultOptions));
        }
    });
})(jQuery);

// 모바일 GNB
//(function($) {
//    $(document).on('click', '#nav .gnb > li > a', function(e) {
//        if ($(this).parent().hasClass('active')) {
//            $(this).parent().removeClass('active');
//        } else {
//            $(this).parent().siblings('.active').removeClass('active');
//            $(this).parent().addClass('active');
//        }
//        e.preventDefault();
//    });
//
//    $(document).on('click', '#nav .nav-backdrop, #nav .btn-nav-close', function() {
//        $('body').removeClass('nav-opened');
//        $('#nav').addClass('collapsed');
//    });
//
//    $(document).on('click', '#header .btn-menu', function() {
//        $('body').addClass('nav-opened');
//        $('#nav').removeClass('collapsed');
//    });
//
//})(jQuery);






