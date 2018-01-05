<?php
$custom_title  = get_post_meta( get_the_ID(), '_cf_title', true );
$custom_subtitle  = get_post_meta( get_the_ID(), '_cf_subtitle', true );
$custom_code  = get_post_meta( get_the_ID(), '_cf_custom_code', true );
$background_img  = get_post_meta( get_the_ID(), '_cf_background_img', true );
$custom_code  = get_post_meta( get_the_ID(), '_cf_custom_code', true );
$cta_text  = get_post_meta( get_the_ID(), '_cf_cta_text', true );
$cta_link  = get_post_meta( get_the_ID(), '_cf_cta_link', true );
?>
<div class="hero" style="background-image:url(<?php echo esc_html( $background_img ); ?>); background-position: <?php echo esc_html( $bg_position ); ?>;">
	<div class="hero-content">
		<div class="page-container animation">
			<div class="work-hero">
				<?php the_post_thumbnail() ?>
			</div><!-- work-hero -->
		</div><!-- page-container -->
	</div><!-- hero-content -->
	<div class="custom-code">
		<?php echo ( $custom_code ); ?>
	</div>
</div><!-- hero -->
<div class="metadata">
	<!-- <?php the_post_navigation(); ?> -->
	<div class="page-container">
		<h1 class="work-title"><?php echo esc_html( $custom_title ); ?></h1>
		<h2 class="work-subtitle"><?php echo esc_html( $custom_subtitle ); ?></h2>
		<?php if ( !empty( $cta_link ) ) {
			printf( '<a href="' . $cta_link . '" class="btn btn-small btn-black-solid">' . $cta_text . '</a>');
		}?>
	</div><!-- page-container -->
</div><!-- metadata -->