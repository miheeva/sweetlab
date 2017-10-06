<?php $organicPage = get_page_by_path('organic-food');?>
<div class="section-organic" data-paroller-factor="0.15" data-paroller-type="foreground" data-paroller-direction="vertical">
    <div class="text-content hiddenPC">
        <h2 class="section-header"><?php echo get_the_title($organicPage); ?></h2>
        <p class="section-description"><?php echo get_post_meta($organicPage->ID,'subheader',true);?></p>
        <a href="<?php the_permalink($organicPage); ?>" class="section-button white-btn">посмотреть меню</a>
        <div class="little-img lOrganic" style="background-image: url('<?php echo get_post_meta($organicPage->ID,'littleImgCake',true);?>')"></div>
    </div>
    <div class="subsection-organic container" data-paroller-factor="0.15" data-paroller-type="background" data-paroller-direction="vertical" style="background-image: url('<?php echo get_post_meta($organicPage->ID,'backgroundOnIndex',true);?>')">
        <div class="text-content hidden-mobile">
            <h2 class="section-header"><?php echo get_the_title($organicPage); ?></h2>
            <p class="section-description"><?php echo get_post_meta($organicPage->ID,'subheader',true);?></p>
            <a href="<?php the_permalink($organicPage); ?>" class="section-button white-btn">посмотреть меню</a>
            <div class="little-img lOrganic" style="background-image: url('<?php echo get_post_meta($organicPage->ID,'littleImgCake',true);?>')"></div>
        </div>
    </div>
</div>
</div>