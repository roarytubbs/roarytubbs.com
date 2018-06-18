<?php
/*
Template Name: Home
*/
$introCopy = get_field( 'home_intro_copy', get_the_ID() );
$primaryAction = get_field( 'home_primary_action', get_the_ID() );
$secondaryAction = get_field( 'home_secondary_action', get_the_ID() );


get_header(); ?>
<div class="hero">
	<span class="overlay"></span>
	<div class="hero-content main-content richtext">
		<div class="page-container animation ">
		<?php if ( $introCopy != '' ): ?>
			<h1 class="entry-title"><?php echo $introCopy; ?></h1>
		<?php endif; ?>
		</div><!-- page-container -->
		<div class="home-page-container-sub">
			<a class="btn fadeInUp" href="<?php echo $primaryAction['url']; ?>" target="<?php echo $primaryAction['target']; ?>"><?php echo $primaryAction['title']; ?></a>
			<?php if ( $secondaryAction ): ?>
				<div class="home-secondary">
					<a class="fadeInUp" href="<?php echo $secondaryAction['url']; ?>" target="<?php echo $secondaryAction['target']; ?>"><?php echo $secondaryAction['title']; ?>	</a>
				</div>
			<?php endif; ?>
		</div><!-- home-page-container-sub -->
	</div><!-- hero-content -->
	<div class="dribbble-shots"></div>
</div><!-- hero -->
<?php get_footer(); ?>