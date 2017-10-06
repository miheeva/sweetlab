<?php include(TEMPLATEPATH.'/templates/second-header.php'); ?>
    <div class="wrapper page-header">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 menu-header-img">
                    <div class="row">
                        <div class="col-xl-7 col-lg-7 col-md-5 col-sm-8 col-xs-8 menu-header">
                            <h1><?php the_title(); ?></h1>
                            <p><?php echo get_post_meta($post->ID,'subheader',true);?></p>
                            <div class="cake">
                                <img src="<?php echo get_template_directory_uri();?>/assets/img/5.png" alt="">
                            </div>

                        </div>

                        <div class="arrow">
                            <div class="arrowImg"></div>
                        </div>
                        <div class="image-header" data-paroller-factor="0.3" data-paroller-type="foreground" data-paroller-direction="vertical">
                            <img src="<?php echo get_template_directory_uri();?>/assets/img/bread.png" alt="">
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="header-background map">
            <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Aef5d1f72523dc33a6d51cd30f2b7ae7b3cd7547d7a156cd5104a44a02f94c4f1&amp;width=100%25&amp;height=580&amp;lang=ru_RU&amp;scroll=true"></script>
        </div>
    </div>

    <div class="wrapper contacts" style="padding-bottom: 50px">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 head-contacts">
                    <h1>Конатктная информация</h1>
                </div>
            </div>
            <div class="row contacts-info">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 no_boot">
                    <ul>
                        <li>
                            <p><span><b>Адрес:</b> </span> ул. Кабанбай батыра, 77<br> (уг. ул. Тулебаева)</p>
                        </li>
                        <li>
                            <span><b>Тел:  </b> <p>  +77020005077</p></span>
                        </li>
                    </ul>

                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 no_boot">
                    <ul>
                        <li>
                            <span><b>E-mail: </b><a href="mailto:hello@sweetlaboratory.com"> hello@sweetlaboratory.com</a></span>
                        </li>
                        <li>
                            <span><b>Работаем каждый день с 10.00 до 20.00</b></span>
                        </li>
                    </ul>
                </div>

            </div>
        </div>
    </div>

<?php get_footer();?>