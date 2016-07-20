<?php
/*
Template Name: Work
*/
get_header(); ?>
<?php get_template_part('template-parts/work-hero'); ?>
<main class="main-content white-bg" role="main">
  <?php
    if ( have_posts() ) :
      /* Start the Loop */
      while ( have_posts() ) : the_post();
        the_content( sprintf());
      endwhile;
    endif;
  ?>
</main><!-- main-content -->
<?php get_footer(); ?>