<?php
/*
Template Name: Home
*/
$custom_title  = get_post_meta( get_the_ID(), '_cf_title', true );
$custom_subtitle  = get_post_meta( get_the_ID(), '_cf_subtitle', true );
get_header(); ?>
<div class="hero">
	<span class="overlay"></span>
	<div class="hero-content zoom">
		<div class="page-container">
			<h1 class="entry-title"><?php echo esc_html( $custom_title ); ?></h1>
			<h2 class="subtitle"><?php echo esc_html( $custom_subtitle ); ?></h2>
		</div><!-- page-container -->
	</div><!-- hero-content -->
	<div class="dribbble-shots"></div>
</div><!-- hero -->

<?php get_footer(); ?>