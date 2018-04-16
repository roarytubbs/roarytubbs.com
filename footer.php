<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package roarytubbs
 */
$custom_js  = get_post_meta( get_the_ID(), '_cf_custom_js', true );

?>
</div><!-- page-content -->
</section><!-- page-wrapper -->
<footer class="page-footer">
	<nav class="footer-nav">
		<div class="page-container">
			<?php wp_nav_menu( array(
				'theme_location' => 'footer-nav',
				'container' => false,
				'menu_class' => ' ',
				'menu_id' => ' '
				) ); ?>
		</div><!-- page-container -->
	</nav><!-- footer-nav -->
	<div class="copyright">
		Made with <i class="fa fa-heart"></i> from OKC using WordPress, SASS & JQuery.
	</div><!-- credits -->
</footer><!-- page-footer -->

<?php wp_footer();?>
<?php $use_custom_javascript = get_field( 'use_custom_javascript', get_the_ID() ); ?>

<?php if ( $use_custom_javascript == true ): ?>
	<script type="text/javascript"><?php the_field('custom_javascript'); ?></script>
<?php endif; ?>
</body>
</html>
