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
</head>
<body <?php body_class(); ?>>
	<section class="page-wrapper">
		<header class="page-header">
			<div class="navigation-wrap">
				<a class="logo" href="<?php echo esc_url( home_url() ); ?>">
					<img src="<?php echo get_template_directory_uri (); ?>/img/logo@2x.png">
					<span><?php echo get_bloginfo('name'); ?></span>
				</a><!-- logo -->
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