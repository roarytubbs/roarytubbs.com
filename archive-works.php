<?php
/**
 * The template for displaying archive pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package roarytubbs
 */
get_header(); ?>

<main class="main-content white-bg" role="main">
	<div class="page-container">
	      <?php
			$maybe_page_title = custom_theme_cpt_get_option( 'gallery', 'archive-title' );
			if ( empty( $maybe_page_title ) || false == $maybe_page_title ) {
				$maybe_page_title = 'Galleries';
			}
	  ?>
      <h1 class="page-title"><?php echo esc_html( $maybe_page_title ); ?></h1>
      <?php
	    	$maybe_cpt_content = custom_theme_cpt_get_option( 'gallery', 'cpt-content' );
	    	if ( false !== $maybe_cpt_content && ! empty( $maybe_cpt_content ) ) {
		    	?>
		    	<section>
				<?php echo apply_filters( 'the_content', $maybe_cpt_content ); ?>
      			</section>
		    	<?php
	    	}
	  ?>
		<?php
		if ( have_posts() ) {
			while ( have_posts() ) {
				the_post();
				get_template_part( 'content', 'gallery' );
			}
		} else {
			get_template_part( 'content', 'none' );
		}
		?>
	</div><!-- page-container -->
</main><!-- main-content -->

<?php get_footer();
