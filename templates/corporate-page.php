<?php include(TEMPLATEPATH.'/templates/second-header.php'); ?>
<div class="wrapper page-header">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12 menu-header-img">
                <div class="row">
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-8 col-xs-8 menu-header">
                        <h1><?php the_title(); ?></h1>
                        <p><?php echo get_post_meta($post->ID,'subheader',true);?></p>
                        <div class="cake">
                            <img src="<?php echo get_post_meta($post->ID,'littleImgCake',true);?>" alt="">
                        </div>

                    </div>

                    <div class="arrow">
                        <div class="arrowImg"></div>
                    </div>
                    <div class="image-header" data-paroller-factor="0.1" data-paroller-type="foreground" data-paroller-direction="vertical">
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

<div class="wrapper catering">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row catering-item">
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-xs-5 catering-text" data-paroller-factor="0.1" data-paroller-type="foreground" data-paroller-direction="vertical">
                        <img src="<?php echo get_template_directory_uri();?>/assets/img/corp-gift.png" alt=""  data-paroller-factor="0.1" data-paroller-type="foreground" data-paroller-direction="vertical">
                        <h3><?php echo get_post_meta($post->ID,'subheader',true);?></h3>
                        <p><?php while (have_posts()){ the_post(); the_content(); }?></p>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-xs-7 catering-slider" data-paroller-factor="0.1" data-paroller-type="foreground" data-paroller-direction="vertical">
                        <div id="c1" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active" style="background-image: url('<?php echo get_template_directory_uri();?>/assets/img/corp-1.jpg')">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<?php get_footer();?>
