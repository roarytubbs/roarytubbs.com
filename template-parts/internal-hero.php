<?php
$custom_title  = get_post_meta( get_the_ID(), '_cf_title', true );
$custom_subtitle  = get_post_meta( get_the_ID(), '_cf_subtitle', true );
$bg_position = get_post_meta( get_the_ID(), '_cf_bg_position', true);
?>
<div class="hero" style="background-image:url(<?php the_post_thumbnail_url() ?>); background-position: <?php echo esc_html( $bg_position ); ?>;">
	<span class="overlay"></span>
	<div class="hero-content">
		<div class="page-container animation">
			<h1 class="entry-title">
				<?php
					if ( is_page('experience') ) {
						printf ('<span id="experience-counter"></span> ');
					}
					echo esc_html( $custom_title );
				?>
			</h1>
			<h2 class="subtitle"><?php echo esc_html( $custom_subtitle ); ?></h2>
		</div><!-- page-container -->
		<img src="https://pbs.twimg.com/profile_images/728255113345695748/igyRIEWy.jpg" alt="avatar" class="avatar about-avatar fadeIn" />
	</div><!-- hero-content -->
	<div class="dribbble-shots"></div>
</div><!-- hero -->