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

?>
</div><!-- page-content -->
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
	</footer><!-- page-footer -->
</section><!-- page-wrapper -->
<div class="credits">
	Made with <i class="fa fa-heart"></i> by Me with WordPress.
</div><!-- credits -->
<?php wp_footer(); ?>

</body>
</html>
