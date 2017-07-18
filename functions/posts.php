<?php
//Добавление пункта меню слайдер
if ( ! function_exists( 'slider_cp' ) ) {

// Опишем требуемый функционал
    function slider_cp() {

        $labels = array(
            'name'                => _x( 'Слайдер на главной', 'Post Type General Name', 'slider' ),
            'singular_name'       => _x( 'Слайдер на главной', 'Post Type Singular Name', 'slider' ),
            'menu_name'           => __( 'Слайдер на главной', 'slider' ),
            'parent_item_colon'   => __( 'Родительский:', 'slider' ),
            'all_items'           => __( 'Все слайды', 'slider' ),
            'view_item'           => __( 'Просмотреть', 'slider' ),
            'add_new_item'        => __( 'Добавить новый слайд', 'slider' ),
            'add_new'             => __( 'Добавить новый', 'slider' ),
            'edit_item'           => __( 'Редактировать', 'slider' ),
            'update_item'         => __( 'Обновить', 'slider' ),
            'search_items'        => __( 'Найти', 'slider' ),
            'not_found'           => __( 'Не найдено', 'slider' ),
            'not_found_in_trash'  => __( 'Не найдено в корзине', 'slider' ),
        );
        $args = array(
            'labels'              => $labels,
            'supports'            => array( 'title', 'editor', 'excerpt', 'thumbnail', 'page-attributes' ),
            'taxonomies'          => array( 'post' ),
            'public'              => true,
            'menu_position'       => 6,
            'menu_icon'           => 'dashicons-category',
        );
        register_post_type( 'slider', $args );

    }

    add_action( 'init', 'slider_cp' ); // инициализируем

}
?>