<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package roarytubbs
 */
$rt_custom_css  = get_post_meta( get_the_ID(), '_cf_custom_css', true );

?><!DOCTYPE html>
<!--[if lte IE 7]><html lang="en-US" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en-US" class="no-js ie8"><![endif]-->
<!--[if IE 9]><html lang="en-US" class="no-js ie9"><![endif]-->
<!--[if !IE]><!--><html <?php language_attributes(); ?> class="no-js non-ie"><!--<![endif]-->
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
	<?php echo wpautop( $rt_custom_css ); ?>
</head>
<?php
$maybe_post_slug = '';
$maybe_post = get_queried_object();
if ( is_a( $maybe_post, 'WP_Post' ) ) {
	$maybe_post_slug = $maybe_post->post_name;
}
$password_required = '';
if ( post_password_required() ) {
	$password_required = 'work-passwort-protected';
}
?>
<body <?php body_class( $password_required );  ?>  >
	<section class="page-wrapper">
		<header class="page-header">
			<div class="navigation-wrap">
				<div class="logo">
					<a href="<?php echo esc_url( home_url() ); ?>">
						<img src="<?php echo get_template_directory_uri (); ?>/img/logo@2x.png">
						<span><?php echo get_bloginfo('name'); ?></span>
					</a>
				</div><!-- logo -->
				<nav class="main-nav">
					<?php wp_nav_menu( array(
						'theme_location' => 'main-nav',
						'container' => false,
						'menu_class' => ' ',
						'menu_id' => ' '
						) ); ?>
					</nav><!-- main-menu -->
					<?php rt_get_social(); ?>
				</div><!-- navigation -->
			</header><!-- page-header -->
			<div class="page-content">