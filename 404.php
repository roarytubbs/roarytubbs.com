<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package roarytubbs
 */

get_header(); ?>




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







	<div id="primary" class="content-area">
		<main class="main-content white-bg" role="main">
			<div class="page-container">
				<div class="medium-width richtext">
					<section class="error-404 not-found">
						<header class="page-header">
							<h1 class="page-title"><?php esc_html_e( 'Oops! That page can&rsquo;t be found.', 'rt' ); ?></h1>
						</header><!-- .page-header -->

						<div class="page-content">
							<p><?php esc_html_e( 'It looks like nothing was found at this location. Maybe try one of the links below or a search?', 'rt' ); ?></p>

							<?php
								get_search_form();

								the_widget( 'WP_Widget_Recent_Posts' );

								// Only show the widget if site has multiple categories.
								if ( rt_categorized_blog() ) :
							?>

							<div class="widget widget_categories">
								<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'rt' ); ?></h2>
								<ul>
								<?php
									wp_list_categories( array(
										'orderby'    => 'count',
										'order'      => 'DESC',
										'show_count' => 1,
										'title_li'   => '',
										'number'     => 10,
									) );
								?>
								</ul>
							</div><!-- .widget -->

							<?php
								endif;

								/* translators: %1$s: smiley */
								$archive_content = '<p>' . sprintf( esc_html__( 'Try looking in the monthly archives. %1$s', 'rt' ), convert_smilies( ':)' ) ) . '</p>';
								the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );

								the_widget( 'WP_Widget_Tag_Cloud' );
							?>

						</div><!-- .page-content -->
					</section><!-- .error-404 -->
				</div><!-- medium width -->
			</div><!-- page-container -->
		</main><!-- main-content -->
	</div><!-- #primary -->

<?php
get_footer();
