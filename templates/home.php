<?php
/*
Template Name: Home
*/
$custom_title  = get_post_meta( get_the_ID(), '_cf_title', true );
$custom_subtitle  = get_post_meta( get_the_ID(), '_cf_subtitle', true );
$cta_text  = get_post_meta( get_the_ID(), '_cf_cta_text', true );
get_header(); ?>
<div class="hero">
	<span class="overlay"></span>
	<div class="hero-content">
		<div class="page-container zoom">
			<h1 class="entry-title"><?php echo esc_html( $custom_title ); ?></h1>
			<h2 class="subtitle"><?php echo esc_html( $custom_subtitle ); ?></h2>
		</div><!-- page-container -->
		<?php if ( !empty( $cta_text ) ) {
			$cta_link  = get_post_meta( get_the_ID(), '_cf_cta_link', true );
			printf( '<a href="' . $cta_link . '" class="btn fadeInUp">' . $cta_text . '</a>');
		}?>
	</div><!-- hero-content -->
	<div class="dribbble-shots"></div>
</div><!-- hero -->

<?php get_footer(); ?>