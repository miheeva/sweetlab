<?php include(TEMPLATEPATH.'/templates/second-header.php'); ?>
<?php include(TEMPLATEPATH.'/templates/page-headers.php'); ?>
    <section>
            <?php woocommerce_content(); ?>

    </section>
<?php get_sidebar(); // подключаем sidebar.php ?>
<?php get_footer(); // подключаем footer.php ?>