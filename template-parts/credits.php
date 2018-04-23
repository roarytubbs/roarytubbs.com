<?php $show_credits = get_field( 'show_credits', get_the_ID() ); ?>
<?php $credit_title = get_field( 'credit_title', get_the_ID() ); ?>
<?php $credit_description = get_field( 'credit_description', get_the_ID() ); ?>
<?php $credit_people = get_field( 'credit_people', get_the_ID() ); ?>

<?php
    // Code to fetch and print CFs, such as:
    $key_1_value_1 = get_post_meta( $post->ID, 'key_1', true );
        echo $key_1_value_1;
?>
<?php if ( $show_credits == true ): ?>
	<section class="credits richtext">
		<header>
			<h3><?php echo ( $credit_title ); ?></h3>
		</header>
		<p><?php echo ( $credit_description ); ?></p>
		<?php if( have_rows('credit_people') ): ?>
			<ul>
				<?php while( have_rows('credit_people') ): the_row();
					// vars
					$c_name = get_sub_field('credit_people_name');
					$c_link = get_sub_field('credit_people_link');
				?>
				<li>
					<?php if( $c_link ): ?><a href="<?php echo $c_link; ?>" target="_blank"><?php endif; ?>
					<?php echo $c_name; ?>
					<?php if( $c_link ): ?></a> <?php endif; ?>
				</li>
			<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</section><!--toolset-->
<?php endif; ?>