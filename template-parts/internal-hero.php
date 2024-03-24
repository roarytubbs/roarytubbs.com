<?php $title = get_field( 'hero_title', get_the_ID() ); ?>
<?php $subtitle = get_field( 'hero_subtitle', get_the_ID() ); ?>
<?php $imgCustomThumb = get_field( 'custom_hero_image', get_the_ID() ); ?>
<?php $bgImgPosition = get_field( 'background_image_position', get_the_ID() ); ?>




<div class="hero" style="background-image:url(<?php the_post_thumbnail_url() ?>); background-position: <?php echo ( $bgImgPosition ); ?>;">
	<span class="overlay"></span>
	<div class="hero-content">
		<div class="page-container animation">
			<h1 class="entry-title">
				<?php
					if ( is_page('experience') ) {
						printf ('<span id="experience-counter"></span> ');
					}
					echo esc_html( $title );
				?>
			</h1>
			<h2 class="subtitle"><?php echo esc_html( $subtitle ); ?></h2>
		</div><!-- page-container -->
		<img src="<?php echo $imgCustomThumb['url']; ?>" alt="avatar" class="avatar about-avatar fadeIn" />
	</div><!-- hero-content -->
	<div class="dribbble-shots"></div>
</div><!-- hero -->