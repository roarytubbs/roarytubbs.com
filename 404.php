<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package roarytubbs
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main class="main-content white-bg" role="main">
		<div class="page-container">
			<div class="medium-width richtext">
				<section class="error-404 not-found">
					<header class="page-header">
						<h1 class="page-title"><?php esc_html_e( 'Boo! Nothing to see here.', 'rt' ); ?></h1>
					</header><!-- .page-header -->

					<div class="page-content">

					</div><!-- .page-content -->
				</section><!-- .error-404 -->
			</div><!-- medium width -->
		</div><!-- page-container -->
	</main><!-- main-content -->
</div><!-- #primary -->

<?php get_footer();?>
