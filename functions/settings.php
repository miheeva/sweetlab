<?php

function my_template( $template ) {

    if( is_page('menu') ){
        if ( $new_template = locate_template( array( '/templates/menu-page.php' ) ) )
            return $new_template ;
    }
    return $template;
};

function sweetlab_custom_logo_setup() {}
?>