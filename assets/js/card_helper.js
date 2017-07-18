/**
 * Created by Cat on 18.07.2017.
 */
(function( $ ) {


$(document).ready(function() {
   Quantity.init();
});





    var Quantity = {
        controls: {
            deecriment: $('#qantityDeecriment'),
            increement: $('#quantityIncreement')
        },
        countField: $('.quantity').find('input[type="number"]'),
        count: 1,
        price: parseFloat($('#card_window > div > div > div.row.content > form > div > div > div.col-xl-3.col-lg-3.col-md-3.col-sm-3.col-xs-3.product-name > span').text()),
        totalPriceField: $('#card_window > div > div > div.row.content > form > div > div > div.col-xl-1.col-lg-1.col-md-1.col-sm-1.col-xs-1.product-subtotal > span'),
        init: function() {
            var self = this;
          this.controls.deecriment.click(function(event) {
             self.deecriment();
          });
          this.controls.increement.click(function(event) {
              self.increement();
          });
        },
        deecriment: function() {
            if (this.count > 0) {
                this.count--;
                this.countField.val(this.count);
                this.makeTotalPrice();
            }
        },
        increement: function() {
                this.count++;
                this.countField.val(this.count);
                this.makeTotalPrice();
        },
        makeTotalPrice: function() {
            this.totalPriceField.text(this.count * this.price  + 'KZT');
        }
    };


})(jQuery);