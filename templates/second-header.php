<!doctype html>
<html  <?php language_attributes(); // вывод атрибутов языка ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); // кодировка ?>">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <script src="<?= get_template_directory_uri() ?>/assets/js/jQuery3.2.1.min.js"></script>
    <script src="<?= get_template_directory_uri() ?>/assets/bootstrap/js/bootstrap.min.js"></script>
    <title>The Sweet Lab</title>
    <?php wp_head(); // необходимо для работы плагинов и функционала ?>
    <style type="text/css">
        div.menu-button {
    height: auto;
    margin: 0px auto 30px;
    text-transform: lowercase;
    font-family: Museo500;
    font-size: 14px;
    color: #111010;
    border: 2px solid black;
    background-color: transparent;
    padding: 13px 19px;
    width: 160px;
    min-width: 160px;
    display: block;
    text-align: center;
    cursor: pointer;
}

div.menu-button a {
    width: 100%;
    height: auto;
}

            a.added_to_cart {
                display: none !important;
            }

    </style>
</head>
<body>
<header class="second-header navbar navbar-toggleable-md navbar-light bg-faded fixed-top">
    <div class="container">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#mainMenu" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-icon"></span>
            <span class="navbar-icon"></span>
            <span class="navbar-icon"></span>
        </button>
        <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
            <?php
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            if ( has_custom_logo() ) {
                echo '<img src="'. esc_url( $logo[0] ) .'">';
            } else {
                echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
            }
            ?>
        </a>

        <?php $args = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
            'theme_location' => 'top', // идентификатор меню, определен в register_nav_menus() в function.php
            'container'=> 'div', // обертка списка
            'container_class' => 'collapse navbar-collapse justify-content-center',
            'container_id'    => 'mainMenu',
            'menu_class' => 'navbar-nav', // класс для ul
            'echo' => 'true',
        );
        wp_nav_menu($args); // выводим верхнее меню
        ?>
    </div>
</header>