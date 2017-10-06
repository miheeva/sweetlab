<?php $cateringPage = get_page_by_path('catering');?>
<div class="section-catering" data-paroller-factor="0.15" data-paroller-type="foreground" data-paroller-direction="vertical">
    <div class="text-content hiddenPC">
        <h2 class="section-header"><?php echo get_the_title($cateringPage); ?></h2>
        <p class="section-description"><?php echo get_post_meta($cateringPage->ID,'subheader',true);?></p>
        <a href="<?php the_permalink($cateringPage); ?>" class="section-button white-btn">подробнее</a>
        <div class="little-img lCatering" style="background-image: url('<?php echo get_post_meta($cateringPage->ID,'littleImgCake',true);?>')"></div>
    </div>
    <div class="subsection-catering container" data-paroller-factor="0.15" data-paroller-type="background" data-paroller-direction="vertical" style="background-image: url('<?php echo get_post_meta($cateringPage->ID,'backgroundOnIndex',true);?>')">
        <div class="text-content hidden-mobile">
            <h2 class="section-header"><?php echo get_the_title($cateringPage); ?></h2>
            <p class="section-description"><?php echo get_post_meta($cateringPage->ID,'subheader',true);?></p>
            <a href="<?php the_permalink($cateringPage); ?>" class="section-button white-btn">подробнее</a>
            <div class="little-img lCatering" style="background-image: url('<?php echo get_post_meta($cateringPage->ID,'littleImgCake',true);?>')"></div>
        </div>
    </div>
</div>