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
                    <div class="image-header" data-paroller-factor="0.3" data-paroller-type="foreground" data-paroller-direction="vertical">
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