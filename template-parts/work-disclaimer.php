<?php $show = get_field( 'show_disclaimer', get_the_ID() ); ?>
<?php $title = get_field( 'disclaimer_title', get_the_ID() ); ?>
<?php $disclaimer = get_field( 'disclaimer', get_the_ID() ); ?>

<?php
if ( ! post_password_required() ) {
    // Code to fetch and print CFs, such as:
    $key_1_value_1 = get_post_meta( $post->ID, 'key_1', true );
        echo $key_1_value_1;
?>
	<?php if ( $show == true ): ?>
		<section class="disclaimer richtext">
			<header>
				<h3><?php echo ( $title ); ?></h3>
			</header>
			<p><?php echo ( $disclaimer ); ?></p>
		</section><!--toolset-->
	<?php endif; ?>
<?php }