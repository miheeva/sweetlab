<footer>
    <div class="overlay-dark"></div>
    <div class="wrapper">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 logo">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
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
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 location">
                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <?php dynamic_sidebar('footer-social'); ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="footer-contacts col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <?php dynamic_sidebar('footer-adr'); ?>
                        </div>
                        <div class="footer-contacts col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <?php dynamic_sidebar('footer-phone'); ?>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 footer-menu">
                    <?php $bottomLeftMenu = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
                        'theme_location' => 'bottomleft', // идентификатор меню, определен в register_nav_menus() в function.php
                        'container'=> '', // обертка списка
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class' => '', // класс для ul
                        'echo' => 'true',
                    );
                    wp_nav_menu($bottomLeftMenu); // выводим верхнее меню
                    ?>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 col-xs-6 footer-menu secondM">
                    <?php $bottomRightMenu = array( // опции для вывода верхнего меню, чтобы они работали, меню должно быть создано в админке
                        'theme_location' => 'bottomright', // идентификатор меню, определен в register_nav_menus() в function.php
                        'container'=> '', // обертка списка
                        'container_class' => '',
                        'container_id'    => '',
                        'menu_class' => '', // класс для ul
                        'echo' => 'true',
                    );
                    wp_nav_menu($bottomRightMenu); // выводим верхнее меню
                    ?>
                </div>
            </div>
            <div class="row pay-logo">
                <ul class="list-inlines">
                    <li><img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/pay/00-payonline-h250.png" alt=""></li>
                    <li><img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/pay/01-mir-h250.png" alt=""></li>
                    <li><img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/pay/02-visa-h250.png" alt=""></li>
                    <li><img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/pay/03-mastercard-h250.png" alt=""></li>
                    <li><img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/pay/04-verified-by-visa-h250.png" alt=""></li>
                    <li><img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/pay/05-mc-secure-code-h250.png" alt=""></li>
                    <li><img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/pay/06-webmoney-h250.png" alt=""></li>
                    <li><img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/pay/07-yandex-money-h250.png" alt=""></li>
                    <li><img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/pay/08-qiwi-h250.png" alt=""></li>
                    <li><img class="img-fluid" src="<?php echo get_template_directory_uri();?>/assets/pay/09-miraccept-h250.png" alt=""></li>
                </ul>
            </div>
        </div>
    </div>
</footer>
<?php include('parts/card/card.php'); ?>

<?php wp_footer(); ?>
<script src="<?= get_template_directory_uri();?>/assets/paroller/dist/jquery.paroller.min.js"></script>
<script src="<?= get_template_directory_uri();?>/assets/js/custom.js"></script>
<script src="<?= get_template_directory_uri();?>/assets/js/card_helper.js"></script>
</body>
</html>