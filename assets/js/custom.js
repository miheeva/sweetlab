
(function ($) {
    if ($(window).width() > '991px') {
        $(window).paroller();
     };
    $('.ajax_add_to_cart').click(function () {
        $('#card_window').css('display', 'block');
        initializeCartModal();
    });
    $('.wpmenucart-contents').click(function () {
        $('#card_window').css('display', 'block');
        initializeCartModal();
    });
    $('#close').click(function () {
       $('#card_window').css('display', 'none');
    });
    $('#mobile-menu').hide();
    $('#dropdownMenuButton').click(function () {
        $('#mobile-menu').css('display','block');
        $('#dropdownMenuButton').hide();
    });
    $('.custom-item').click (function () {
        $('#dropdownMenuButton').css('display','block');
        $('#mobile-menu').hide();
        var text = $(this).text();
        var button = $('#dropdownMenuButton');
        button.text(text);
    });



    function initializeCartModal() {
      var summs = $('.cart_item .product-subtotal.col-xl-2').find('.woocommerce-Price-amount');
      var outputField  = $('.order-total').find('.woocommerce-Price-amount');
      var resultSumm = 0;
      summs.each(function(key, value) {
         resultSumm += (parseFloat($(this).text()));
      });
      console.log(resultSumm);
      outputField.text(resultSumm + ' KZT');
    };


var numItems = 9;

customPaginate();

var moreButton = $('.menu-button');

moreButton.click(function() {
numItems += 9;
customPaginate();
})

function customPaginate() {
var item = $('.sort-item');
item.each(function(key, value) {
if (key > numItems) {
$(this).hide();
}
});
}
function showItem() {
var item = $('.sort-item');
item.each(function(key, value) {
if (key <= numItems) {
$(this).show();
}
})
}
moreButton.click(function() {
numItems += 10;
showItem()
})
})(jQuery);









