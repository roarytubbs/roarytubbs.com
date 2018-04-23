<?php $show_tools_used = get_field( 'show_tools_used', get_the_ID() ); ?>
<?php if ( $show_tools_used == true ): ?>
	<section class="toolset">
		<header class="richtext">
			<h3><?php the_field('tools_used_title'); ?></h3>
		</header>
		<?php
		$images = get_field('tools_used_logo');
		$size = 'thumbnail';
		if ( $images ): ?>
		    <ul class="box">
		        <?php foreach( $images as $image ): ?>
		            <li class="box-item box-item-10 tint">
		            	<?php echo wp_get_attachment_image( $image['ID'], $size ); ?>
		            </li>
		        <?php endforeach; ?>
		    </ul>
		<?php endif; ?>
	</section><!--toolset-->
<?php endif; ?>