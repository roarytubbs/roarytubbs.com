<?php
$toolset_title  = get_post_meta( get_the_ID(), '_cf_toolset_title', true );
$toolset_logos = get_post_meta( get_the_ID(), '_cf_toolset_logos', true);
?>
<header class="richtext">
	<h4><?php echo esc_html( $toolset_title ); ?></h4>
</header>
<?php
cmb2_output_file_list( '_cf_toolset_logos', 'small', 'col col-10' );
?>