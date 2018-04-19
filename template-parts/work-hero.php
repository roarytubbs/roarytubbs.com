<?php $should_this_be_a_custom_hero = get_field( 'show_credits', get_the_ID() ); ?>
<?php $title = get_field( 'hero_title', get_the_ID() ); ?>
<?php $subtitle = get_field( 'hero_subtitle', get_the_ID() ); ?>
<?php $bgImg = get_field( 'custom_hero_image', get_the_ID() ); ?>
<?php $bgImgPosition = get_field( 'background_image_position', get_the_ID() ); ?>
<?php $button = get_field( 'hero_cta_button', get_the_ID() ); ?>
<?php $customCode = get_field( 'hero_custom_code', get_the_ID() ); ?>


<?php if ( $should_this_be_a_custom_hero == true ): ?>
	<div class="hero" style="background-image:url(<?php echo $bgImg['url']; ?>); background-position: <?php echo ( $bgImgPosition ); ?>;">
		<div class="hero-content">
			<div class="page-container animation">
				<div class="work-hero">
					<?php the_post_thumbnail() ?>
				</div><!-- work-hero -->
			</div><!-- page-container -->
		</div><!-- hero-content -->
		<div class="custom-code">
			<?php echo ( $customCode ); ?>
		</div>
	</div><!-- hero -->
	<div class="metadata">
		<?php the_post_navigation(); ?>
		<div class="page-container">
			<h1 class="work-title"><?php echo ( $title ); ?></h1>
			<h2 class="work-subtitle"><?php echo ( $subtitle ); ?></h2>
			<?php if ( $button ): ?>
				<a class="btn btn-small btn-black-solid" href="<?php echo $button['url']; ?>" target="<?php echo $button['target']; ?>"><?php echo $button['title']; ?></a>
			<?php endif; ?>
		</div><!-- page-container -->
	</div><!-- metadata -->
<?php else : ?>
	<div class="hero">
		<div class="hero-content">
			<div class="page-container animation">
				<div class="work-hero">
					<?php the_post_thumbnail() ?>
				</div><!-- work-hero -->
			</div><!-- page-container -->
		</div><!-- hero-content -->
	</div><!-- hero -->
	<div class="metadata">
		<?php the_post_navigation(); ?>
		<div class="page-container">
			<h1 class="work-title"><?php the_title(); ?></h1>
		</div><!-- page-container -->
	</div><!-- metadata -->
<?php endif; ?>
