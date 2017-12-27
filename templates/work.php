<?php
/*
Template Name: Works
*/
$work_button_text = get_post_meta( get_the_ID(), '_cf_work_button_text', true );
$work_button_url = get_post_meta( get_the_ID(), '_cf_work_button_url', true );

get_header(); ?>
<?php get_template_part('template-parts/internal-hero'); ?>
<main class="main-content white-bg" role="main">
	<div class="page-container">
		<div class="row">
			<?php
				$all_works = new WP_Query (
				  array(
				    'post_type' => 'works',
				    'paged' => get_query_var( 'paged' ),
					'posts_per_page'	=> 9				  )
				);

				while ( $all_works->have_posts() ) : $all_works->the_post();
				$cf_thumbnail = get_post_meta( get_the_ID(), '_cf_thumbnail_img', true);
				$cf_subtitle = get_post_meta( get_the_ID(), '_cf_subtitle', true);
			?>
			<?php if(!empty($post->post_password)){ ?>
				<article class="col col-30 work-item-wrapper is-password-protected">
			<?php } else { ?>
				<article class="col col-30 work-item-wrapper">
			<?php } ?>
					<a href="<?php echo the_permalink(); ?>">
					<span class="overlay">
					</span><!-- overlay -->
					<figure class="work-img-wrap">
						<img src="<?php echo esc_html( $cf_thumbnail ); ?>">
					</figure><!-- work-img-wrap -->
					<figcaption class="metadata">
						<h2 class="work-title"><?php the_title(); ?></h2>
						<h3 class="work-subtitle"><?php echo esc_html( $cf_subtitle ); ?></h3><span class="btn">View <?php the_title(); ?></span>
					</figcaption><!-- metadata -->
				</a>
			</article><!-- work-item -->
			<?php endwhile; wp_reset_postdata(); ?>
			<article class="col col-30">
			</article>
		</div><!-- row -->
		<div class="row view-more">
			<div class="col col-100 aligncenter">
				<a href="<?php echo esc_html( $work_button_url ); ?>" class="btn btn-black"><?php echo esc_html( $work_button_text ); ?></a>
			</div><!-- col col-100 -->
		</div><!-- row -->
	</div><!--page-container -->
</main><!-- main-content -->
<?php get_footer(); ?>