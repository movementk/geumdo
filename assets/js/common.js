/* GNB Event */
(function($) {
    $(document).on('mouseenter focusin', '#gnb .container > ul', function() {
        $('#gnb').addClass('opened');
    });
    $(document).on('mouseleave', '#gnb .container > ul', function() {
        $('#gnb').removeClass('opened');
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




/* Partner Slider
var partnerSlider = $('.partner .slider').bxSlider({
    minSlides: 5,
    maxSlides: 5,
    slideWidth: 170,
    slideMargin: 30,
    pager: false,
    controls: true
});
*/
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
