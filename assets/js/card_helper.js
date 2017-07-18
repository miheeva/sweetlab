/**
 * Created by Cat on 18.07.2017.
 */
(function( $ ) {


$(document).ready(function() {
    var cartItem = $('.woocommerce-cart-form__cart-item');
    cartItem.each(function(key, value) {
        new Quantity($(this));
    });
});




/**
     *
     * @param jQuery||element cartItem
     * @constructor
     */
    var Quantity = function(cartItem) {
        this.cartItem = cartItem;
        this.orderTotal = $('.order-total').find('.woocommerce-Price-amount');
        this.controls = {
            deecriment: cartItem.find('#qantityDeecriment'),
            increement: cartItem.find('#quantityIncreement')
        };
        this.countField = cartItem.find('.quantity').find('input[type="number"]');
        this.count = this.countField.val();
        this.price = parseFloat(cartItem.find('.product-name > span').text());
        this.totalPriceField  = cartItem.find('div.col-xl-1.col-lg-1.col-md-1.col-sm-1.col-xs-1.product-subtotal > span');
        console.log(this);
        this.init();
    };

    Quantity.prototype.init = function() {
        var self = this;
        this.controls.deecriment.click(function(event) {
            self.deecriment();
        });
        this.controls.increement.click(function(event) {
            self.increement();
        });
    };
    Quantity.prototype.deecriment = function() {
        if (this.count > 0) {
            this.count--;
            this.countField.val(this.count);
            this.makeTotalPrice();
        }
    };
    Quantity.prototype.increement = function() {
        this.count++;
        this.countField.val(this.count);
        this.makeTotalPrice();
    };

    Quantity.prototype.makeTotalPrice = function () {
        this.totalPriceField.text(this.count * this.price  + ' KZT');
        this.makeTotalOrderPrice();
    };
    Quantity.prototype.makeTotalOrderPrice = function() {
        var totalPrice = 0;
        var itemsSumm = $('.woocommerce-cart-form__cart-item').find('div.col-xl-1.col-lg-1.col-md-1.col-sm-1.col-xs-1.product-subtotal > span');
        console.log(this.orderTotal);
        itemsSumm.each(function(key, value) {
            totalPrice += parseFloat($(this).text());
        });
        this.orderTotal.text(totalPrice + ' KZT');
    };

})(jQuery);