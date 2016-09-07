<?php
/*
Template Name: Work
*/
get_header(); ?>
<?php get_template_part('template-parts/internal-hero'); ?>
<main class="main-content white-bg" role="main">
	<div class="page-container">
		<div class="grid-view">
			<?php
		//Define your custom post type name in the arguments
			$args = array('post_type' => 'works');
		//Define the loop based on arguments
			$loop = new WP_Query( $args );
		//Display the contents
			while ( $loop->have_posts() ) : $loop->the_post();
			$cf_thumbnail = get_post_meta( get_the_ID(), '_cf_thumbnail_img', true);
			$cf_subtitle = get_post_meta( get_the_ID(), '_cf_subtitle', true);
			// echo '<pre>';
			// print_r(get_post_custom());
			// echo '</pre>';
			?>
			<article class="grid-view-item work-item">
				<a href="<?php echo the_permalink(); ?>">
					<span class="overlay">
						<span class="btn">View <?php the_title(); ?></span>
					</span>
					<figure class="work-img-wrap">
						<img src="<?php echo esc_html( $cf_thumbnail ); ?>">
					</figure><!-- work-img-wrap -->
					<figcaption class="metadata">
						<h2 class="work-title"><?php the_title(); ?></h2>
						<h3 class="work-subtitle"><?php echo esc_html( $cf_subtitle ); ?></h3>
					</figcaption>
				</a>
			</article>
		<?php endwhile; wp_reset_postdata(); ?>
		<article class="grid-view-item blank"></article>
	</div>
</div>
</main><!-- main-content -->
<?php get_footer(); ?>