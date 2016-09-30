<?php
/*
Template Name: Work
*/
get_header(); ?>
<?php get_template_part('template-parts/internal-hero'); ?>
<main class="main-content white-bg" role="main">
	<div class="page-container">
		<div class="row">
			<?php
				//Define your custom post type name in the arguments
				$args = array(
					'post_type'			=> 'works',
					'posts_per_page'	=> 3,
					'meta_key'			=> '_cf_post_date',
					'orderby'			=> '_cf_post_date',
					'order'				=> 'DESC'
				);
				//Define the loop based on arguments
				$loop = new WP_Query( $args );
				//Display the contents
				while ( $loop->have_posts() ) : $loop->the_post();
				$cf_thumbnail = get_post_meta( get_the_ID(), '_cf_thumbnail_img', true);
				$cf_subtitle = get_post_meta( get_the_ID(), '_cf_subtitle', true);
			?>
			<article class="col col-30 work-item-wrapper">
				<a href="<?php echo the_permalink(); ?>">
					<span class="overlay">
					</span><!-- overlay -->
					<figure class="work-img-wrap">
						<img src="<?php echo esc_html( $cf_thumbnail ); ?>">
					</figure><!-- work-img-wrap -->
					<figcaption class="metadata">
						<h2 class="work-title"><?php the_title(); ?></h2>
						<h3 class="work-subtitle"><?php echo esc_html( $cf_subtitle ); ?></h3>				<span class="btn">View <?php the_title(); ?></span>
					</figcaption><!-- metadata -->
				</a>
			</article><!-- work-item -->
			<?php endwhile; wp_reset_postdata(); ?>
		</div><!-- row -->
	</div><!--page-container -->
</main><!-- main-content -->
<?php get_footer(); ?>