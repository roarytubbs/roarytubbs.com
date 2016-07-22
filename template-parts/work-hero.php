<?php
$custom_title  = get_post_meta( get_the_ID(), '_cf_title', true );
$custom_subtitle  = get_post_meta( get_the_ID(), '_cf_subtitle', true );
?>
<div class="hero">
	<div class="hero-content">
		<div class="page-container">
			<div class="work-hero">
				<?php the_post_thumbnail() ?>
			</div><!-- work-hero -->
		</div><!-- page-container -->
	</div><!-- hero-content -->
	<div class="hero-particles">
		<div id="particles-js"></div>
	</div><!-- hero-particle -->
</div><!-- hero -->
<div class="metadata">
<?php the_post_navigation(); ?>
	<div class="page-container">
		<h1 class="work-title"><?php echo esc_html( $custom_title ); ?></h1>
		<h2 class="work-subtitle"><?php echo esc_html( $custom_subtitle ); ?></h2>
	</div><!-- page-container -->
</div><!-- metadata -->