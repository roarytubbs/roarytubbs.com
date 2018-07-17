<?php $module = get_field( 'content_module', get_the_ID() ); ?>
<?php if( have_rows('content_module') ): ?>
	<?php while( have_rows('content_module') ): the_row();
		$type = get_sub_field('content_module_type');
		$hasCusomtClass = get_sub_field('content_add_custom_class');
		$class = get_sub_field('content_module_class');
		$richtext = get_sub_field('content_use_richtext_class');
		$title = get_sub_field('content_module_title');
		$maxHeight = get_sub_field('content_max_height');
		$maxHeightValue = get_sub_field('content_max_height_value');
		$subTitle = get_sub_field('content_module_subtitle');
		$content = get_sub_field('module_content');
		$image = get_sub_field('module_image');
		$video = get_sub_field('content_video_file');
		$roundedCorners = get_sub_field('module_rounded_corners');
		$dropShadow = get_sub_field('module_drop_shadow');
		$hasCustomBGColor = get_sub_field('content_add_custom_background_color');
		$bgColor = get_sub_field('module_background_color');
		$hasCustomCss = get_sub_field('content_add_custom_css_styles');
		$customCSS = get_sub_field('content_module_custom_css');
		$sliderId = get_sub_field('module_slider_id');
		$isSubSection = get_sub_field('content_is_sub_section');
		?>
		<?php if( $type == 'Medium Width' || $type == 'Large Width' ): ?>
			<?php if( $hasCustomCss == true ): ?>
				<style type="text/css">
	 				<?php echo $customCSS; ?>
	 			</style>
			<?php endif; ?>
			<div class="module <?php if( $richtext == true ): ?> richtext <?php endif; ?> <?php if($isSubSection == true ): ?> sub-module <?php endif; ?><?php if( $hasCusomtClass == true ): echo $class; endif; ?>"<?php if( $hasCustomBGColor == true && $bgColor != ''): ?>style="background-color: <?php echo $bgColor; ?>;"<?php endif; ?>>
				<div class="<?php if ($type == 'Medium Width'):?>medium-width<? elseif ($type == 'Large Width'):?>large-width<?php endif; ?>">
					<?php if( $subTitle ): ?><h4 class="sub-title"><?php echo $subTitle; ?></h4> <?php endif; ?>
					<?php if( $title ): ?><h2 class="title"><?php echo $title; ?></h2> <?php endif; ?>
					<?php echo $content; ?>
				</div>
			</div><!-- medium-width & large-width -->
		<?php elseif( $type == 'Image' || $type == 'Slider' || $type == 'Animated gif' || $type == 'Video'): ?>
			<?php if( $hasCustomCss == true ): ?>
				<style type="text/css">
	 				<?php echo $customCSS; ?>
	 			</style>
			<?php endif; ?>
			<div class="module <?php if( $richtext == true ): ?> richtext <?php endif; ?><?php if($isSubSection == true ): ?> sub-module <?php endif; ?><?php if( $hasCusomtClass == true ): echo $class; endif; ?><?php if ( $roundedCorners == true): ?> rounded_corners <?php endif; ?><?php if ( $dropShadow == true): ?> drop_shadow <?php endif; ?>
			<?php if ( $type == 'Animated gif'): ?> animated-gif<?php endif; ?>"
			<?php if( $hasCustomBGColor == true && $bgColor != ''): ?>style="background-color: <?php echo $bgColor; ?>;"<?php endif; ?>>
				<?php if ($type == 'Image' && !empty($image)): ?>
					<div class="image" <?php if( $maxHeight == true ): ?> style="max-height:<?php echo $maxHeightValue; ?>" <?php endif; ?>>
						<img class="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<div class="caption-wrap">
							<div class="caption"><?php echo $image['alt']; ?></div>
						</div><!-- caption-wrap -->
					</div><!-- image -->
				<?php elseif ($type == 'Animated gif' && !empty($image)): ?>
					<div class="image animated-gif" <?php if( $maxHeight == true ): ?> style="max-height:<?php echo $maxHeightValue; ?>" <?php endif; ?>>
						<img class="lazy" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
						<div class="caption-wrap">
							<div class="caption"><?php echo $image['alt']; ?></div>
						</div><!-- caption-wrap -->
					</div><!-- image -->
				<?php elseif ($type == 'Slider' && !empty($sliderId)): ?>
					<div class="slider">
						<?php echo do_shortcode(get_sub_field('module_slider_id')); ?>
					</div><!-- slider -->
				<?php elseif( $type == 'Video' ): ?>
					<div class="video">
						<video controls>
							<source src="<?php echo $video['url']; ?>" type="video/mp4">
							Your browser does not support the video tag.
						</video>
						<div class="caption-wrap">
							<div class="caption"><?php echo $video['title']; ?></div>
						</div><!-- caption-wrap -->
					</div><!-- video -->
				<?php endif; ?>
			</div><!-- image slider animated gif video -->
		<?php elseif( $type == 'Full Width Image' ): ?>
			<?php if( $hasCustomCss == true ): ?>
				<style type="text/css">
	 				<?php echo $customCSS; ?>
	 			</style>
			<?php endif; ?>
			<div class="module <?php if( $richtext == true ): ?> richtext<?php endif; ?><?php if($isSubSection == true ): ?> sub-module <?php endif; ?><?php if ( $hasCusomtClass == true ): echo $class; endif; ?>"<?php if( $hasCustomBGColor == true && $bgColor != ''): ?>style="background-color: <?php echo $bgColor; ?>;"<?php endif; ?>>
				<div class="full-width-image">
					<div class="image" style="background-image:url(<?php echo $image['url'];?>)"></div><!-- image -->
					<div class="caption-wrap">
						<div class="caption"><?php echo $image['alt']; ?></div>
					</div><!-- caption-wrap -->
				</div><!-- full-width-image -->
			</div><!-- module -->
		<?php endif; ?>
	<?php endwhile; ?>
<?php endif; ?>