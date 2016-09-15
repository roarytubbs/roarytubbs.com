<?php
$custom_title  = get_post_meta( get_the_ID(), '_cf_title', true );
$custom_subtitle  = get_post_meta( get_the_ID(), '_cf_subtitle', true );
$custom_code  = get_post_meta( get_the_ID(), '_cf_custom_code', true );
$background_img  = get_post_meta( get_the_ID(), '_cf_background_img', true );
$custom_code  = get_post_meta( get_the_ID(), '_cf_custom_code', true );
?>
<div class="hero" style="background-image:url(<?php echo esc_html( $background_img ); ?>); background-position: <?php echo esc_html( $bg_position ); ?>;">
	<div class="hero-content">
		<div class="page-container">
			<div class="work-hero">
				<?php the_post_thumbnail() ?>
			</div><!-- work-hero -->
		</div><!-- page-container -->
	</div><!-- hero-content -->
	<div class="custom-code">
		<?php echo print_r( $custom_code ); ?>;
	</div>
</div><!-- hero -->
<div class="metadata">
	<?php the_post_navigation(); ?>
	<div class="page-container">
		<h1 class="work-title"><?php echo esc_html( $custom_title ); ?></h1>
		<h2 class="work-subtitle"><?php echo esc_html( $custom_subtitle ); ?></h2>
	</div><!-- page-container -->
</div><!-- metadata -->