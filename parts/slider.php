<div class="container-fluid no_boot">
<div id="indexSlider" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">
        <?php
        $loop1 = new WP_Query( array(
            'post_type' => array('services_tax', 'slider'),
            'posts_per_page' => 1)); ?>
        <?php if ($loop1->have_posts() ): ?>
            <?php while ($loop1->have_posts() ) : $loop1->the_post(); ?>

                <div class="carousel-item active" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                    <div class="overlay"></div>
                    <div class="carousel-caption d-none d-md-block" data-paroller-factor="0.1" data-paroller-type="foreground" data-paroller-direction="vertical">
                        <h3><?php the_title() ?></h3>
                        <p><?php the_content();?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif ?>

        <?php
        $loop2 = new WP_Query( array(
            'post_type' => array('services_tax', 'slider'),
            'post_per_page' => -1,
            'offset' => 1)); ?>
        <?php if ($loop2->have_posts() ): ?>
            <?php while ($loop2->have_posts() ) : $loop2->the_post(); ?>
                <div class="carousel-item" style="background-image: url(<?php the_post_thumbnail_url(); ?>);">
                    <div class="overlay"></div>
                    <div class="carousel-caption d-none d-md-block" data-paroller-factor="0.1" data-paroller-type="foreground" data-paroller-direction="vertical">
                        <h3><?php the_title() ?></h3>
                        <p><?php the_content();?></p>
                    </div>
                </div>
            <?php endwhile; ?>
        <?php endif ?>
    </div>
    <ol class="carousel-indicators">
        <?php if ($loop1->have_posts() ): ?>
            <?php while ($loop1->have_posts() ) : $loop1->the_post(); ?>
                <?php $count=0; ?>
                <li data-target="#indexSlider" data-slide-to="<?php echo $count ?>" class="active"></li>
            <?php endwhile; ?>
        <?php endif ?>
        <?php $count=1 ?>
        <?php if ($loop2->have_posts() ): ?>
            <?php while ($loop2->have_posts() ) : $loop2->the_post(); ?>
                <li data-target="#indexSlider" data-slide-to="<?php echo $count ?>"></li>
                <?php $count++ ?>
            <?php endwhile; ?>
        <?php endif ?>
    </ol>
    <a class="carousel-control-prev carousel-controls" href="#indexSlider" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon carousel-arrow" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next carousel-controls" href="#indexSlider" role="button" data-slide="next">
        <span class="carousel-control-next-icon carousel-arrow" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>
</div>