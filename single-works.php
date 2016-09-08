<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package roarytubbs
 */

get_header(); ?>
<?php get_template_part('template-parts/work-hero'); ?>
<main class="main-content white-bg" role="main">
	<?php
	if ( have_posts() ) :
		/* Start the Loop */
	while ( have_posts() ) : the_post();
			get_template_part( 'template-parts/content', get_post_format() );
	endwhile;
	endif;
	?>

	<div class="module">
		<div class="medium-width">
			<?php get_template_part('template-parts/toolset'); ?>
		</div><!-- medium-width -->
	</div><!-- module text -->

</main><!-- #main -->
<?php get_footer();
