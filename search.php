<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package roarytubbs
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main class="main-content white-bg" role="main">
		<div class="page-container">
			<div class="medium-width richtext">
				<?php
				if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'rt' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
					</header><!-- .page-header -->

					<?php
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );

					endwhile;

					the_posts_navigation();

				else :

					get_template_part( 'template-parts/content', 'none' );

				endif; ?>
			</div><!-- medium width -->
		</div><!-- page-container -->
	</main><!-- main-content -->
</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
