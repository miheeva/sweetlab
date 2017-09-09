<?php
/**
 * Created by PhpStorm.
 * User: Cat
 * Date: 18.07.2017
 * Time: 22:15
 */
?>
<div id="card_window">
    <div class="cart-content">
        <div class="container">
            <div class="row header">
                <div class="col-lg-10">
                    <h3>Корзина</h3>
                </div>
                <div class="col-lg-2">
                    <div class="close" id="close"></div>
                </div>
                <hr>
            </div>
            <div class="row content">
                <?php if ( ! defined( 'ABSPATH' ) ) {
                    exit;
                }
                wc_print_notices();
                do_action( 'woocommerce_before_cart' ); ?>
                <form class="woocommerce-cart-form" action="<?php echo esc_url( wc_get_cart_url() ); ?>" method="post">
                    <?php do_action( 'woocommerce_before_cart_table' ); ?>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 shop_table shop_table_responsive cart woocommerce-cart-form__contents" cellspacing="0">

                        <?php do_action( 'woocommerce_before_cart_contents' ); ?>

                        <?php
                        foreach ( WC()->cart->get_cart() as $cart_item_key => $cart_item ) {
                            $_product   = apply_filters( 'woocommerce_cart_item_product', $cart_item['data'], $cart_item, $cart_item_key );
                            $product_id = apply_filters( 'woocommerce_cart_item_product_id', $cart_item['product_id'], $cart_item, $cart_item_key );

                            if ( $_product && $_product->exists() && $cart_item['quantity'] > 0 && apply_filters( 'woocommerce_cart_item_visible', true, $cart_item, $cart_item_key ) ) {
                                $product_permalink = apply_filters( 'woocommerce_cart_item_permalink', $_product->is_visible() ? $_product->get_permalink( $cart_item ) : '', $cart_item, $cart_item_key );
                                ?>
                                <div class="row woocommerce-cart-form__cart-item <?php echo esc_attr( apply_filters( 'woocommerce_cart_item_class', 'cart_item', $cart_item, $cart_item_key ) ); ?>">



                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 product-thumbnail">
                                        <?php
                                        $thumbnail = apply_filters( 'woocommerce_cart_item_thumbnail', $_product->get_image(), $cart_item, $cart_item_key );

                                        if ( ! $product_permalink ) {
                                            echo $thumbnail;
                                        } else {
                                            printf( '<p href="%s">%s</p>', esc_url( $product_permalink ), $thumbnail );
                                        }
                                        ?>
                                    </div>

                                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col-xs-3 product-name" data-title="<?php esc_attr_e( 'Product', 'woocommerce' ); ?>">
                                        <?php
                                        if ( ! $product_permalink ) {
                                            echo apply_filters( 'woocommerce_cart_item_name', $_product->get_name(), $cart_item, $cart_item_key ) . '&nbsp;';
                                        } else {
                                            echo apply_filters( 'woocommerce_cart_item_name', sprintf( '<p style="font-weight: bold" href="%s">%s</p>', esc_url( $product_permalink ), $_product->get_name() ), $cart_item, $cart_item_key );
                                        }

                                        // Meta data
                                        echo WC()->cart->get_item_data( $cart_item );

                                        // Backorder notification
                                        if ( $_product->backorders_require_notification() && $_product->is_on_backorder( $cart_item['quantity'] ) ) {
                                            echo '<p class="backorder_notification">' . esc_html__( 'Available on backorder', 'woocommerce' ) . '</p>';
                                        }
                                        ?>
                                        <?php if ($_product->post->post_content): ?>

                                            <?php echo apply_filters( 'woocommerce_short_description', $_product->post->post_content ); ?>

                                        <?php endif; ?>
                                        <?php
                                        echo apply_filters( 'woocommerce_cart_item_price', WC()->cart->get_product_price( $_product ), $cart_item, $cart_item_key );
                                        ?>

                                    </div>


                                    <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-xs-2 product-quantity" data-title="<?php esc_attr_e( 'Quantity', 'woocommerce' ); ?>">
                                        <span id="qantityDeecriment" class="quantity_controls pull-left">-</span>
                                        <?php
                                        if ( $_product->is_sold_individually() ) {
                                            $product_quantity = sprintf( '1 <input type="hidden" name="cart[%s][qty]" value="1" />', $cart_item_key );
                                        } else {
                                            $product_quantity = woocommerce_quantity_input( array(
                                                'input_name'  => "cart[{$cart_item_key}][qty]",
                                                'input_value' => $cart_item['quantity'],
                                                'max_value'   => $_product->get_max_purchase_quantity(),
                                                'min_value'   => '0',
                                            ), $_product, false );
                                        }

                                        echo apply_filters( 'woocommerce_cart_item_quantity', $product_quantity, $cart_item_key, $cart_item );
                                        ?>
                                        <span id="quantityIncreement" class="quantity_controls">+</span>
                                    </div>

                                    <div class="col-xl-2 col-lg-1 col-md-2 col-sm-1 col-xs-1 product-subtotal" data-title="<?php esc_attr_e( 'Total', 'woocommerce' ); ?>">
                                        <?php
                                        echo apply_filters( 'woocommerce_cart_item_subtotal', WC()->cart->get_product_subtotal( $_product, $cart_item['quantity'] ), $cart_item, $cart_item_key );
                                        ?>
                                    </div>
                                    <div class="col-xl-1 col-lg-1 col-md-1 col-sm-1 col-xs-1 product-remove">
                                        <?php
                                        echo apply_filters( 'woocommerce_cart_item_remove_link', sprintf(
                                            '<a href="%s" class="remove" aria-label="%s" data-product_id="%s" data-product_sku="%s"><img src="/wordpress/wp-content/themes/sweetlab/assets/img/trash.png"/> </a>',
                                            esc_url( WC()->cart->get_remove_url( $cart_item_key ) ),
                                            __( 'Remove this item', 'woocommerce' ),
                                            esc_attr( $product_id ),
                                            esc_attr( $_product->get_sku() )
                                        ), $cart_item_key );
                                        ?>
                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>

                        <?php do_action( 'woocommerce_cart_contents' ); ?>
                        <?php do_action( 'woocommerce_after_cart_contents' ); ?>

                    </div>
                    <?php do_action( 'woocommerce_after_cart_table' ); ?>
                </form>

                <div class="cart-collaterals">
                    <?php  do_action( 'woocommerce_cart_collaterals' );?>
                </div>
                <?php do_action( 'woocommerce_after_cart' ); ?>

            </div>
        </div>
    </div>

</div>
<script src="<?=get_template_directory_uri();?>/assets/js/card_helper.js"></script>
