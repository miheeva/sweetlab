<?php include(TEMPLATEPATH.'/templates/second-header.php'); ?>
<div class="wrapper page-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 menu-header-img">
                <div class="row">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-8 col-xs-8 menu-header">
                        <h1><?php the_title(); ?></h1>
                        <p><?php echo get_post_meta($post->ID,'subheader',true);?></p>
                        <div class="cake">
                            <img src="<?php echo get_post_meta($post->ID,'littleImgCake',true);?>" alt="">
                        </div>

                    </div>

                    <div class="arrow">
                        <div class="arrowImg"></div>
                    </div>
                    <div class="image-header" data-paroller-factor="0.3" data-paroller-type="foreground" data-paroller-direction="vertical" style="bottom: -100px;">
                        <img src="<?php the_post_thumbnail_url(); ?>" alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="header-background" style="background: url('<?php echo get_post_meta($post->ID,'background',true);?>') 50% 63% no-repeat;" data-paroller-factor="1" data-paroller-type="background" data-paroller-direction="vertical">
        <div class="overlay-dark"></div>
    </div>
</div>

<div class="wrapper menu">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 dropdown">
                <ul class="menu-link hidden-mobile">
                    <li><a href="#">Показать все</a></li>
                    <li><a href="#">Салаты</a></li>
                    <li><a href="#">Хлебцы</a></li>
                    <li><a href="#">Овощи</a></li>
                    <li><a href="#">Фрукты</a></li>
                    <li><a href="#">Ягоды</a></li>
                </ul>
                <button class="button-menu-m btn btn-secondary dropdown-toggle hiddenPC" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Показать все
                </button>
                <ul class="dropdown-menu hiddenPC" role="menu" aria-labelledby="dropdownMenuButton">
                    <li><a href="#" class="dropdown-item">Показать все</a></li>
                    <li><a href="#" class="dropdown-item">Салаты</a></li>
                    <li><a href="#" class="dropdown-item">Хлебцы</a></li>
                    <li><a href="#" class="dropdown-item">Овощи</a></li>
                    <li><a href="#" class="dropdown-item">Фрукты</a></li>
                    <li><a href="#" class="dropdown-item">Ягоды</a></li>
                </ul>
            </div>
        </div>
        <div class="row">
            <?php
            // Выполнение запроса по категориям и атрибутам
            $args = array(
// Использование аргумента tax_query для установки параметров терминов таксономии
                'tax_query' => array(
// Использование нескольких таксономий требует параметр relation
                    'relation' => 'AND', // значение AND для выборки товаров принадлежащим одновременно ко всем указанным терминам
// массив для категории имеющей слаг slug-category-1
                    array(
                        'taxonomy' => 'product_cat',
                        'field' => 'slug',
                        'terms' => 'organic-food'
                    ),
// массив для категории имеющей слаг slug-category-2

                ),
// Параметры отображения выведенных товаров
                'posts_per_page' => -1, // количество выводимых товаров
                'post_type' => 'product', // тип товара
                'orderby' => 'title', // сортировка
            );

            $loop = new WP_Query( $args );
            while ( $loop->have_posts() ) : $loop->the_post();
            global $product;
            ?>

                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-xs-6 no_boot">
                    <?php woocommerce_show_product_sale_flash( $post, $product ); ?>

                    <div class="menu-item slider">
                        <div id="m1<?=$loop->post->ID;?>" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active" style="background-image: url('<?php the_post_thumbnail_url($loop->post->ID)?>')">
                                    <div class="overlay"></div>
                                </div>
                                <?php
                                if ( ! defined( 'ABSPATH' ) ) {
                                    exit;
                                }

                                global $post, $product;

                                $attachment_ids = $product->get_gallery_image_ids();

                                if ( $attachment_ids && has_post_thumbnail() ) {
                                    foreach ( $attachment_ids as $attachment_id ) {
                                        $full_size_image = wp_get_attachment_image_src( $attachment_id, 'full' );
                                        $thumbnail       = wp_get_attachment_image_src( $attachment_id, 'shop_thumbnail' );
                                        $attributes      = array(
                                            'title'                   => get_post_field( 'post_title', $attachment_id ),
                                            'data-caption'            => get_post_field( 'post_excerpt', $attachment_id ),
                                            'data-src'                => $full_size_image[0],
                                            'data-large_image'        => $full_size_image[0],
                                            'data-large_image_width'  => $full_size_image[1],
                                            'data-large_image_height' => $full_size_image[2],
                                        );

                                        $html  = ' <div class="carousel-item" style="background-image: url(' . esc_url( $thumbnail[0] ) . ')">';
                                        $html .= wp_get_attachment_image( $attachment_id, 'shop_single', false, $attributes );
                                        $html .= '<div class="overlay"></div></div>';

                                        echo apply_filters( 'woocommerce_single_product_image_thumbnail_html', $html, $attachment_id );
                                    }
                                }
                                ?>


                            </div>
                            <a class="carousel-control-prev carousel-controls" href="#m1<?=$loop->post->ID;?>" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon carousel-arrow" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next carousel-controls" href="#m1<?=$loop->post->ID;?>" role="button" data-slide="next">
                                <span class="carousel-control-next-icon carousel-arrow" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>

                        <div class="description-item">
                            <h3><?php the_title(); ?></h3>
                            <div class="item_discription"><?php the_content(); ?></div>
                            <p class="tech-info"><?php echo $product->get_price_html(); ?></p>
                            <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>
                        </div>
                    </div>


                </div>
            <?php endwhile; ?>
            <!-- Сброс данных запроса -->
            <?php wp_reset_query(); ?>

        </div>
    </div>
</div>

<?php get_footer();?>
