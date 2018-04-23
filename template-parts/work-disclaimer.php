<?php $show = get_field( 'show_disclaimer', get_the_ID() ); ?>
<?php $title = get_field( 'disclaimer_title', get_the_ID() ); ?>
<?php $disclaimer = get_field( 'disclaimer', get_the_ID() ); ?>

<?php if ( $show == true ): ?>
	<section class="richtext" id="work-disclaimer-wrap">
		<p><span><?php echo ( $title ); ?></span><?php echo ( $disclaimer ); ?></p>
	</section><!--toolset-->
<?php endif; ?>