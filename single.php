<?php get_header();?>
<section>
<?php if ( have_posts() ) while ( have_posts() ) : the_post();?>
	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<h1><?php the_title();?></h1>
		<div class="meta">
			<p>Опубликовано: <?php the_time('F j, Y'); ?> в <?php the_time('g:i a'); ?></p>
			<p>Категории: <?php the_category(',') ?></p>
		</div>
		<?php the_content();?>
	</article>
<?php endwhile;?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
