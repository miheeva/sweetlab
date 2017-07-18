
(function ($) {
    // if ($(window).width() > '991px') {
        $(window).paroller();
    // }
    $('.ajax_add_to_cart').click(function () {
        $('#card_window').css('display', 'block');
    });
    $('.wpmenucart-contents').click(function () {
        $('#card_window').css('display', 'block');
    });
    $('#close').click(function () {
       $('#card_window').css('display', 'none');
    });
})(jQuery);









