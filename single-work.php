<?php
/**
 * The template for displaying all single posts.
 * 
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package roarytubbs
 */

get_header(); ?>
<?php get_template_part('template-parts/work-hero'); ?>
<?php get_template_part('template-parts/work-disclaimer'); ?>
<?php get_template_part('template-parts/work-details'); ?>
<main class="main-content white-bg" role="main">
	<?php if ( ! post_password_required() ) { ?>
		 <?php get_template_part( 'template-parts/work-modules' ); ?>
	 <?php } ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		 <?php the_content(); ?>
	  </article>
	<?php endwhile; ?>
</main><!-- #main -->
<div id="work-footer" class="box">
	<div class="box-item box-item-50">
		<?php get_template_part('template-parts/work-team'); ?>
	</div><!--box-item-->
	<div class="box-item box-item-50">
		<?php get_template_part('template-parts/toolset'); ?>
	</div><!--box-item-->
</div><!-- work-footer -->
<?php get_footer();