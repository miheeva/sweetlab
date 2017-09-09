<div class="sections">
    <?php $menuPage = get_page_by_path('menu');?>
<div class="wrapper section-menu" data-paroller-factor="0.5" data-paroller-type="foreground" data-paroller-direction="vertical">
    <div class="after" data-paroller-factor="-0.15" data-paroller-type="foreground" data-paroller-direction="vertical" style="background-image: url('<?php echo get_the_post_thumbnail_url($menuPage)?>')"></div>
    <div class="container">
        <div class="offset-2 col-xl-6 col-lg-6 col-md-6 col-sm-12 col-xs-12 text-content no-offset">
            <h2 class="section-header"><?php echo get_the_title($menuPage); ?></h2>
            <p class="section-description"><?php echo get_post_meta($menuPage->ID,'subheader',true);?></p>
            <a href="<?php the_permalink($menuPage); ?>" class="section-button">посмотреть меню</a>
            <div class="little-img lMenu" style="background-image: url('<?php echo get_post_meta($menuPage->ID,'littleImgCake',true);?>')"></div>
        </div>
        <div class="col-xl-5 col-lg-5 col-md-5 hidden-sm-down hidden-sm-up hidden-xs-down hidden-xs-up"></div>
    </div>
</div>