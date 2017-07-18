<?php include(TEMPLATEPATH.'/templates/second-header.php'); ?>
<?php include(TEMPLATEPATH.'/templates/page-headers.php'); ?>
<section>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); // старт цикла ?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>> <?php // контэйнер с классами и id ?>
		<h1><?php the_title(); // заголовок ?></h1>

        <h2><?php echo get_post_meta($post->ID,'subheader',true);?></h2>
		<?php the_content(); // контент ?>
	</article>
<?php endwhile; // конец цикла ?>
</section>
<?php get_sidebar(); // подключаем sidebar.php ?>
<?php get_footer(); // подключаем footer.php ?>