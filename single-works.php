<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package roarytubbs
 */

get_header();
get_template_part('template-parts/work-hero'); ?>
<main class="main-content white-bg" role="main">
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		 <?php the_content(); ?>
		 <?php get_template_part( 'template-parts/modules' ); ?>
	  </article>
    <?php endwhile; ?>
</main><!-- #main -->
<div id="work-footer" class="box">
	<div class="box-item box-item-50">
		<?php get_template_part('template-parts/credits'); ?>
	</div><!--box-item-->
	<div class="box-item box-item-50">
		<?php get_template_part('template-parts/toolset'); ?>
	</div><!--box-item-->
</div><!-- work-footer -->
<?php get_footer();