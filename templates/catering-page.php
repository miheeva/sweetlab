<?php include(TEMPLATEPATH.'/templates/second-header.php'); ?>
<?php include(TEMPLATEPATH.'/templates/page-headers.php'); ?>
<div class="wrapper catering">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="row catering-item">
                    <?php $cateringSlider1 = get_post( 67 ); ?>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-xs-5 catering-text" data-paroller-factor="-0.1" data-paroller-type="foreground" data-paroller-direction="vertical">
                        <h3><?php echo get_the_title($cateringSlider1); ?></h3>
                        <p><?php echo get_post_meta($cateringSlider1->ID,'textCatering',true);?></p>
                    </div>
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-xs-7 catering-slider" data-paroller-factor="0.1" data-paroller-type="foreground" data-paroller-direction="vertical">
                        <div id="c1" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <?php
                                $imagesSrc1 = get_post_galleries_images( 67 )[0];
                                $count1 = 0;
                                foreach ($imagesSrc1 as $src):
                               ?>
                                <li data-target="#c1" data-slide-to="<?=$count1?>" class="<?php $count1 === 0 ? print 'active' : print '';?>"></li>

                                <?php $count1++;endforeach;?>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <?php $imagesSrc = get_post_galleries_images( 67 )[0];
                                $count = 0;
                                foreach ($imagesSrc as $src):
                                $count++;
                                ?>
                                    <div class="carousel-item <?php $count === 1 ? print 'active' : print '';?>" style="background-image: url('<?=$src?>')">

                                    </div>
                                <?php endforeach; ?>

                            </div>
                            <a class="carousel-control-prev carousel-controls" href="#c1" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon carousel-arrow" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next carousel-controls" href="#c1" role="button" data-slide="next">
                                <span class="carousel-control-next-icon carousel-arrow" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>

                </div>
                <div class="row catering-item">
                    <?php $cateringSlider2 = get_post( 73 ); ?>
                    <div class="col-xl-7 col-lg-7 col-md-7 col-sm-7 col-xs-7 catering-slider" data-paroller-factor="0.1" data-paroller-type="foreground" data-paroller-direction="vertical">
                        <div id="c2" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                                <?php
                                $imagesSrc4 = get_post_galleries_images( 73 )[0];
                                $count4 = 0;
                                foreach ($imagesSrc4 as $src2):
                                ?>
                                <li data-target="#c2" data-slide-to="<?=$count4?>" class="<?php $count4 === 0 ? print 'active' : print '';?>"></li>
                                    <?php $count4++;endforeach;?>
                            </ol>
                            <div class="carousel-inner" role="listbox">
                                <?php $imagesSrc3 = get_post_galleries_images( 67 )[0];
                                $count3 = 0;
                                foreach ($imagesSrc3 as $src2):
                                $count3++;
                                ?>
                                <div class="carousel-item <?php $count3 === 1 ? print 'active' : print '';?>" style="background-image: url('<?=$src2?>')">
                                </div>
                                <?php endforeach; ?>


                            </div>
                            <a class="carousel-control-prev carousel-controls" href="#c2" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon carousel-arrow" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next carousel-controls" href="#c2" role="button" data-slide="next">
                                <span class="carousel-control-next-icon carousel-arrow" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5 col-xs-5 catering-text" data-paroller-factor="-0.1" data-paroller-type="foreground" data-paroller-direction="vertical">
                        <h3><?php echo get_the_title($cateringSlider2); ?></h3>
                        <p><?php echo get_post_meta($cateringSlider2->ID,'textCatering',true);?></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<?php get_footer(); ?>
