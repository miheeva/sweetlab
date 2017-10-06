<?php

function my_template( $template ) {
    if( is_page('menu') ){
        if ( $menu_template = locate_template( array( '/templates/menu-page.php' ) ) )
            return $menu_template;
    }
    if( is_page('catering')) {
        if ( $catering_page = locate_template( array ( '/templates/catering-page.php')))
            return $catering_page;
    }
    if( is_page('corporate')) {
        if ( $corporate_page = locate_template( array ( '/templates/corporate-page.php')))
            return $corporate_page;
    }
    if( is_page('organic-food')) {
        if ( $organic_page = locate_template( array ( '/templates/organic-page.php')))
            return $organic_page;
    }
    if( is_page('contacts')) {
        if ( $contact_page = locate_template( array ( '/templates/contact-page.php')))
            return $contact_page;
    }
//    if (is_page('checkout')) {
//        if ($checkout_page = locate_template ( array ('/templates/checkout-page.php')))
//            return $checkout_page;
//    }

    return $template;
};

function sweetlab_custom_logo_setup() {}
?>