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

