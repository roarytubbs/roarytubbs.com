<?php $show = get_field( 'show_work_details', get_the_ID() ); ?>
<?php $role = get_field( 'work_details_role', get_the_ID() ); ?>
<?php $duration = get_field( 'work_details_duration', get_the_ID() ); ?>
<?php $team = get_field( 'work_details_team', get_the_ID() ); ?>
<?php $overview = get_field( 'work_details_overview', get_the_ID() ); ?>

<?php if ( $show == true ): ?>
	<section class="richtext" id="work-details-wrap">
		<ul>
			<li><p><span>Role</span><?php echo ( $role ); ?></p></li>
			<li><p><span>Duration</span><?php echo ( $duration ); ?></p></li>
			<li><p><span>Teams</span><?php echo ( $team ); ?></p></li>
		</ul>
		<div class="work-details-overview"><p><?php echo ( $overview ); ?></p></div>
	</section><!--toolset-->
<?php endif; ?>