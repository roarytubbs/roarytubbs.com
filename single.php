<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package roarytubbs
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main class="main-content white-bg" role="main">
		<div class="page-container">
			<div class="medium-width richtext"> <h2>test</h2>
				<?php
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', get_post_format() );

					the_post_navigation();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;

				endwhile; // End of the loop.
				?>
			</div><!-- medium width -->
		</div><!-- page-container -->
	</main><!-- main-content -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
