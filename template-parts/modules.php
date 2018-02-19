<?php
if ( ! post_password_required() ) {

	$module_entries = get_post_meta( get_the_ID(), '_cf_module_repeat_group', true );

	foreach ( (array) $module_entries as $key => $entry ) {

		$type = $title = $sub_title = $content = $image = $slider = $rounded_corners = $bg_color = $drop_shadow = '';

		if ( isset( $entry['_cf_module_type_selection'] ) ) {
			$type = esc_html( $entry['_cf_module_type_selection'] );
		}

		if ( isset( $entry['_cf_module_title'] ) ) {
			$title = esc_html( $entry['_cf_module_title'] );
		}

		if ( isset( $entry['_cf_module_sub_title'] ) ) {
			$sub_title = esc_html( $entry['_cf_module_sub_title'] );
		}

		if ( isset( $entry['_cf_module_content'] ) ) {
			$content =  $entry['_cf_module_content'] ;
		}

		if ( isset( $entry['_cf_module_slider'] ) ) {
			$slider =  $entry['_cf_module_slider'] ;
		}

		if ( isset( $entry['_cf_module_image'] ) ) {
			$image =  $entry['_cf_module_image'] ;
		}

		if ( isset( $entry['_cf_module_image_rounded_corners'] ) ) {
			$rounded_corners = $entry['_cf_module_image_rounded_corners'] ;
		}

		if ( isset( $entry['_cf_module_image_dropshadow'] ) ) {
			$drop_shadow = $entry['_cf_module_image_dropshadow'] ;
		}
		if ( isset( $entry['_cf_custom_bg_color'] ) ) {
			$bg_color = $entry['_cf_custom_bg_color'] ;
		}

		echo '<div class="module ' . $type . ($type == 'medium-width' ? ' richtext' : '') . ($rounded_corners == 'on' ? ' rounded_corners' : '') . ($drop_shadow == 'on' ? ' drop_shadow' : '') .  ($bg_color != '' ? ' has-bg-color' . '" style="background-color:' . $bg_color : '"' ) . '">';
		// MEDIUM WIDTH MODULE
		if ( $type === 'medium-width' ) {
			if ( !empty( $sub_title ) ) {
				echo ( '<h4 class="sub-title">' . $sub_title . '</h4>');
			}
			if ( !empty( $title ) ) {
				echo ( '<h2 class="title">' . $title . '</h2>');
			}
			if ( !empty( $content ) ) {
				echo ( '<div class="richtext">' . $content . '</div>' );
			}
		}
		// SLIDER MODULE
		else if ( $type == 'slider' ) {
			if ( !empty( $slider ) ) {
				echo ( '<div class="slider">' . do_shortcode(" $slider ") . '</div>' );
			}
		}
		// IMAGE MODULE
		else if ( $type == 'image' ) {
			if ( !empty( $image ) ) {
				echo ( '<img class="lazy" src="' . $image . '">' );
			}
		}
		// FULL WIDTH IMAGE
		else if ( $type == 'full-width-image' ) {
			if ( !empty( $image ) ) {
				echo '<div class="image lazy" style="background-image: url(' . $image . '); height: 600px;" data-original="' . $image . '"></div>';
			}
		}
		echo '</div>';
	}
}
?>