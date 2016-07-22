<?php
/*
Template Name: Work
*/
get_header(); ?>
<?php get_template_part('template-parts/internal-hero'); ?>
<main class="main-content white-bg" role="main">

	<?php
	//Define your custom post type name in the arguments
	$args = array('post_type' => 'works');
	//Define the loop based on arguments
	$loop = new WP_Query( $args );
	//Display the contents
	while ( $loop->have_posts() ) : $loop->the_post();
	$cf_thumbnail = get_post_meta( get_the_ID(), '_cf_thumbnail_img', true);
	// echo '<pre>';
	// print_r(get_post_custom());
	// echo '</pre>';
	?>
	<h1 class="entry-title"><?php the_title(); ?></h1>
	<a href="<?php echo the_permalink(); ?>">Link</a>
	<img src="<?php echo $cf_thumbnail; ?>">

<?php endwhile; wp_reset_postdata(); ?>
</main><!-- main-content -->
<?php get_footer(); ?>