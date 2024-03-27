<?php
/*
Template Name: Works
*/
$showMoreWorks = get_field( 'show_more_works', get_the_ID() );
$moreWorksButton = get_field( 'show_more_works_cta', get_the_ID() );
get_header(); ?>
<?php get_template_part('template-parts/internal-hero'); ?>
<main class="main-content white-bg" role="main">
    <div class="page-container">
        <div class="row">
            <?php
            $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
            $works_query = new WP_Query (array(
                'post_type' => 'works',
                'paged'          => $paged,
                'posts_per_page'  => 3)
            );
            while ( $works_query->have_posts() ) : $works_query->the_post();
            $thumb = get_field( 'work_thumbnail', get_the_ID() );
            $subtitle = get_field( 'hero_subtitle', get_the_ID() );
            ?>

            <?php if(!empty($post->post_password)){ ?>
                <article class="col col-100 work-item-wrapper is-password-protected">
            <?php } else { ?>
                <article class="col col-100 work-item-wrapper">
            <?php } ?>
            <a href="<?php echo the_permalink(); ?>" aria-hidden="true">
            <span class="overlay"></span><!-- overlay -->
            <figure class="work-img-wrap">
                <img src="<?php echo $thumb['url']; ?>" alt="<?php echo $thumb['alt']; ?>" />
            </figure><!-- work-img-wrap -->
            <figcaption class="metadata"> 
                <h2 class="work-title"><?php the_title(); ?></h2>
                <h3 class="work-subtitle"><?php echo esc_html( $subtitle ); ?></h3>
                <?php get_template_part('template-parts/work-details'); ?>
                <span  class="btn">View <?php the_title(); ?></span>
            </figcaption><!-- metadata -->
            </article><!-- work-item -->
            </a>
            <?php endwhile; wp_reset_postdata(); ?>
        </div><!-- row -->


        <!-- Pagination -->
        <div class="pagination">
      <?php
            echo paginate_links(array(
                'total' => $works_query->max_num_pages,
                'current' => max(1, get_query_var('paged')),
            ));
        ?>
        </div>


<?php
$args = array(
    'post_type' => 'works', // Replace 'books' with your custom post type slug
    'posts_per_page' => 3, // Set the number of posts to display per page
    'paged' => get_query_var('paged') ? get_query_var('paged') : 1,
);

$custom_query = new WP_Query($args);
?>

<?php
$total_pages = $custom_query->max_num_pages;
$current_page = max(1, get_query_var('paged'));
?>



<?php
echo '<div class="pagination">';
echo paginate_links(array(
 'base' => get_pagenum_link(1) . '%_%',
 'format' => '/works/%#%', // Change to match your URL structure if needed
 'current' => $current_page,
 'total' => $total_pages,
));
echo '</div>';
?>


        <?php if ( $showMoreWorks ): ?>
            <div class="row view-more">
                <div class="col col-100 aligncenter">
                    <a class="btn btn-black-ghost" href="<?php echo $moreWorksButton['url']; ?>" target="<?php echo $moreWorksButton['target']; ?>"><?php echo $moreWorksButton['title']; ?></a>
                </div><!-- col col-100 -->
            </div><!-- row -->
        <?php endif; ?> 
    </div><!--page-container -->
</main><!-- main-content -->
<?php get_footer(); ?>
