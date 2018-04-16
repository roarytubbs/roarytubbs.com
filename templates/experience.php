<?php
/*
Template Name: Experience
*/
$skillsets = get_field( 'show_skillsets', get_the_ID() );
$expTitle = get_field( 'experience_toolset_title', get_the_ID() );
$partnerships = get_field( 'show_partnerships', get_the_ID() );
$partnershipsTitle = get_field( 'experience_partnerships_title', get_the_ID() );

get_header(); ?>
<?php get_template_part('template-parts/internal-hero'); ?>

<main role="main">
	<?php
	if ( have_posts() ) :
		/* Start the Loop */
	while ( have_posts() ) : the_post();
	get_template_part( 'template-parts/content', 'page' );
	endwhile;
	endif;
	?>



<?php if ( $skillsets == true ): ?>
	<section id="skillset-container" class="main-content">
		<div class="page-container">
			<?php if ( $expTitle): ?>
				<header class="richtext">
					<h3><?php echo ( $expTitle ); ?></h3>
				</header>
			<?php endif; ?>
			<div class="row">
				<?php if( have_rows('experience_list_one') ): ?>
					<ul class="col col-25">
						<?php while( have_rows('experience_list_one') ): the_row();
							$item = get_sub_field('experience_list_one_item');
						?>
							<li>
								<?php echo $item; ?>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
				<?php if( have_rows('experience_list_two') ): ?>
					<ul class="col col-25">
						<?php while( have_rows('experience_list_two') ): the_row();
							$item = get_sub_field('experience_list_two_item');
						?>
							<li>
								<?php echo $item; ?>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
				<?php if( have_rows('experience_list_three') ): ?>
					<ul class="col col-25">
						<?php while( have_rows('experience_list_three') ): the_row();
							$item = get_sub_field('experience_list_three_item');
						?>
							<li>
								<?php echo $item; ?>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
				<?php if( have_rows('experience_list_four') ): ?>
					<ul class="col col-25">
						<?php while( have_rows('experience_list_four') ): the_row();
							$item = get_sub_field('experience_list_four_item');
						?>
							<li>
								<?php echo $item; ?>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div><!-- row -->
		</div><!-- page-container -->
	</section><!-- skillset-container -->
<?php endif; ?>

<?php if ( $partnerships == true ): ?>
	<section id="partnerships-container" class="main-content white-bg content-sep">
		<div class="page-container">
			<?php if ( $partnershipsTitle): ?>
				<header class="richtext">
					<h3><?php echo ( $partnershipsTitle ); ?></h3>
				</header>
			<?php endif; ?>
			<div class="row">
				<?php if( have_rows('partnership_list_one') ): ?>
					<ul class="col col-25">
						<?php while( have_rows('partnership_list_one') ): the_row();
							$item = get_sub_field('partnership_list_one_item');
						?>
							<li>
								<?php echo $item; ?>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
				<?php if( have_rows('partnership_list_two') ): ?>
					<ul class="col col-25">
						<?php while( have_rows('partnership_list_two') ): the_row();
							$item = get_sub_field('partnership_list_two_item');
						?>
							<li>
								<?php echo $item; ?>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
				<?php if( have_rows('partnership_list_three') ): ?>
					<ul class="col col-25">
						<?php while( have_rows('partnership_list_three') ): the_row();
							$item = get_sub_field('partnership_list_three_item');
						?>
							<li>
								<?php echo $item; ?>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
				<?php if( have_rows('partnership_list_four') ): ?>
					<ul class="col col-25">
						<?php while( have_rows('partnership_list_four') ): the_row();
							$item = get_sub_field('partnership_list_four_item');
						?>
							<li>
								<?php echo $item; ?>
							</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div><!-- row -->
		</div><!-- page-container -->
	</section><!-- experience-container -->
<?php endif; ?>


<section id="toolset-container" class="main-content white-bg">
	<div class="page-container">
		<?php get_template_part('template-parts/toolset'); ?>
	</div><!-- page-conteiner -->
</section><!-- toolset-container -->
</main><!-- main-content -->
<?php get_footer(); ?>