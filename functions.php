<?php
show_admin_bar(false);
register_nav_menus(array(
	'top' => 'Верхнее меню',
	'bottomleft' => 'Внизу первое',
	'bottomright' => 'Внизу второе'
));
add_theme_support('post-thumbnails'); // включаем поддержку миниатюр
//set_post_thumbnail_size(250, 150); // задаем размер миниатюрам 250x150
add_image_size('big-thumb', 400, 400, true); // добавляем еще один размер картинкам 400x400 с обрезкой

register_sidebar(array( // регистрируем левую колонку, этот кусок можно повторять для добавления новых областей для виджитов
	'name' => 'Социальные сети в футере', // Название в админке
	'id' => "footer-social", // идентификатор для вызова в шаблонах
	'description' => 'Место для социальных сетей в футере', // Описалово в админке
	'before_widget' => '', // разметка до вывода каждого виджета
	'after_widget' => "", // разметка после вывода каждого виджета
));

register_sidebar(array( // регистрируем левую колонку, этот кусок можно повторять для добавления новых областей для виджитов
    'name' => 'Адрес в футере', // Название в админке
    'id' => "footer-adr", // идентификатор для вызова в шаблонах
    'description' => 'Адрес в футере', // Описалово в админке
    'before_widget' => '', // разметка до вывода каждого виджета
    'after_widget' => "", // разметка после вывода каждого виджета
));

register_sidebar(array( // регистрируем левую колонку, этот кусок можно повторять для добавления новых областей для виджитов
    'name' => 'Телефон в футере', // Название в админке
    'id' => "footer-phone", // идентификатор для вызова в шаблонах
    'description' => 'Телефон в футере', // Описалово в админке
    'before_widget' => '', // разметка до вывода каждого виджета
    'after_widget' => "", // разметка после вывода каждого виджета
));


function load_resources() {
    wp_enqueue_style('mainStyles', get_template_directory_uri() . '/assets/css/style.css', ['bootstrap']);
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css');
}
add_action('wp_enqueue_scripts', 'load_resources');
add_filter('template_include', 'my_template');
add_theme_support( 'custom-logo' );
add_action( 'after_setup_theme', 'sweetlab_custom_logo_setup' );
add_theme_support( 'custom-background' );

$defaults = array(
    'default-color'          => '#ffffff',
    'default-image'          => '',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );
add_theme_support( 'title-tag' );
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
//подключение файла настроек редактора
include ('functions/posts.php');
include('functions/settings.php');

?>

<?php

add_filter( 'woocommerce_checkout_fields' , 'custom_override_checkout_fields' );

	function custom_override_checkout_fields( $fields ) {
        $fields['billing']['billing_address_1']['required'] = false;
        $fields['billing']['billing_address_2']['required'] = false;
		unset($fields['billing']['billing_address_1']);
		unset($fields['billing']['billing_address_2']);
	return $fields;
}


?>

