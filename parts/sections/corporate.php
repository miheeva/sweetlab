<?php $corporatePage = get_page_by_path('corporate');?>
<div class="wrapper section-corporate" data-paroller-factor="0.5" data-paroller-type="foreground" data-paroller-direction="vertical">
    <div class="after" data-paroller-factor="-0.05" data-paroller-type="foreground" data-paroller-direction="vertical"></div>
    <div class="container">
        <div class="offset-2 col-xl-7 col-lg-7 col-md-7 col-sm-12 col-xs-12 text-content no-offset">
            <h2 class="section-header"><?php echo get_the_title($corporatePage); ?></h2>
            <p style="width: 80%" class="section-description"><?php echo get_post_meta($corporatePage->ID,'subheader',true);?></p>
            <a href="<?php the_permalink($corporatePage); ?>" class="section-button">подробнее</a>
            <div class="little-img lCorporate" style="background-image: url('<?php echo get_post_meta($corporatePage->ID,'littleImgCake',true);?>')"></div>
        </div>
        <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-xs-5 hidden-mobile"></div>
    </div>
</div>