<?php
/*
Template Name: Medium Width
 */
get_header(); ?>
<?php get_template_part('template-parts/internal-hero'); ?>
<main class="main-content white-bg" role="main">
	<div class="page-container">
		<div class="medium-width richtext">
			<?php
			while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'page' );

		// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>
	</div><!-- medium width -->
</div><!-- page-container -->
</main><!-- main-content -->


<?php
get_footer();
?>