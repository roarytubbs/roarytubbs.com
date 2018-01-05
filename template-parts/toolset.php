<?php
$toolset_title  = get_post_meta( get_the_ID(), '_cf_toolset_title', true );
$toolset_logos = get_post_meta( get_the_ID(), '_cf_toolset_logos', true);
?>
<?php
if ( ! post_password_required() ) {
    // Code to fetch and print CFs, such as:
    $key_1_value_1 = get_post_meta( $post->ID, 'key_1', true );
        echo $key_1_value_1;
?>
<section class="toolset">
	<header class="richtext">
		<h3><?php echo esc_html( $toolset_title ); ?></h3>
	</header>
	<?php
	cmb2_output_file_list( '_cf_toolset_logos', 'small' );
	?>
</section><!--toolset-->
<?php }