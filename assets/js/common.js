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
        auto: true,
        controls: true,
        prevText: '<span class="glyphicon glyphicon-menu-left"></span>',
        nextText: '<span class="glyphicon glyphicon-menu-right"></span>'
    });
})(jQuery);
/* Partner Slider */
var partnerSlider = $('.partner .slider').bxSlider({
    minSlides: 5,
    maxSlides: 5,
    slideWidth: 170,
    slideMargin: 30,
    pager: false,
    controls: true
});
