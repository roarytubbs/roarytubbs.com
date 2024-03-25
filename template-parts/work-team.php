<?php $show = get_field( 'show_team_members_section', get_the_ID() ); ?>
<?php $title = get_field( 'team_members_title', get_the_ID() ); ?>
<?php $description = get_field( 'team_members_description', get_the_ID() ); ?>
<?php $team = get_field( 'team_members', get_the_ID() ); ?>

<?php
    // Code to fetch and print CFs, such as:
    $key_1_value_1 = get_post_meta( $post->ID, 'key_1', true );
        echo $key_1_value_1;
?>
<?php if ( $show == true ): ?>
	<section class="credits richtext">
		<header>
			<h3><?php echo ( $title ); ?></h3>
		</header>
		<p><?php echo ( $description ); ?></p>
		<?php if( have_rows('team_members') ): ?>
			<ul>
				<?php while( have_rows('team_members') ): the_row();
					// vars
					$c_name = get_sub_field('member');
					$c_link = get_sub_field('member_url');
				?>
				<li>
					<?php if( $c_link ): ?><a href="<?php echo $c_link; ?>" target="_blank"><?php endif; ?>
					<?php echo $c_name; ?>
					<?php if( $c_link ): ?></a> <?php endif; ?>
				</li>
			<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</section><!--team-->
<?php endif; ?>