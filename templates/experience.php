<?php
/*
Template Name: Experience
*/
$skillset_1 = get_post_meta( get_the_ID(), '_cf_skillset_list_one', true );
$skillset_2 = get_post_meta( get_the_ID(), '_cf_skillset_list_two', true );
$skillset_3 = get_post_meta( get_the_ID(), '_cf_skillset_list_three', true );
$skillset_4 = get_post_meta( get_the_ID(), '_cf_skillset_list_four', true );

$partnerships_title  = get_post_meta( get_the_ID(), '_cf_partnerships_title', true );
$partnership_1 = get_post_meta( get_the_ID(), '_cf_partnership_list_one', true );
$partnership_2 = get_post_meta( get_the_ID(), '_cf_partnership_list_two', true );
$partnership_3 = get_post_meta( get_the_ID(), '_cf_partnership_list_three', true );
$partnership_4 = get_post_meta( get_the_ID(), '_cf_partnership_list_four', true );
$partnership_5 = get_post_meta( get_the_ID(), '_cf_partnership_list_five', true );
$partnership_6 = get_post_meta( get_the_ID(), '_cf_partnership_list_size', true );

get_header(); ?>
<?php get_template_part('template-parts/internal-hero'); ?>

<main role="main">
	<?php
	if ( have_posts() ) :
		/* Start the Loop */
	while ( have_posts() ) : the_post();
	get_template_part( 'template-parts/content', 'page' );
	endwhile;
	endif;
	?>
		<section id="skillset-container" class="main-content">
			<div class="page-container">
				<div class="row">
					<ul class="col col-25">
						<?php echo wpautop( $skillset_1 ); ?>
					</ul>
					<ul class="col col-25">
						<?php echo wpautop( $skillset_2 ); ?>
					</ul>
					<ul class="col col-25">
						<?php echo wpautop( $skillset_3 ); ?>
					</ul>
					<ul class="col col-25">
						<?php echo wpautop( $skillset_4 ); ?>
					</ul>
				</div><!-- row -->
			</div><!-- page-container -->
		</section><!-- skillset-container -->
	<!-- <section id="employment-container" class="main-content">
		<div class="tabs">
			<ul class="tabs-content small-width richtext">
				<li data-content="ge" class="selected">
					<h5>GE Oil & Gas</h5>
					<strong>UI/UX Designer</strong>
					<span>July 2016</span>
				</li>
				<li data-content="array">
					<h5>Array Technology</h5>
					<strong>UI/UX Designer</strong>
					<span>April 2016</span>
				</li>
				<li data-content="bigwing">
					<h5>BigWing Interactive</h5>
					<strong>Lead Front End Designer</strong>
					<span>July 2015</span>
				</li>
				<li data-content="rehash">
					<h5>Rehash</h5>
					<strong>Front End Design Engineer</strong>
					<span>December 2013</span>
				</li>
				<li data-content="frontline">
					<h5>Frontline Church</h5>
					<strong>Director of Communications</strong>
					<span>September 2012</span>
				</li>
				<li data-content="faa">
					<h5>FAA</h5>
					<strong>Front End Design Engineer</strong>
					<span>July 2010</span>
				</li>
				<li data-content="medencentive">
					<h5>MedEncentive</h5>
					<strong>Jr .Net Developer</strong>
					<span>March 2008</span>
				</li>
			</ul> 
			<nav>
				<ul class="tabs-navigation">
					<li data-content="ge" class="selected">
						<h5>GE Oil & Gas</h5>
						<span>July 2016</span>
					</li>
					<li data-content="array">
						<h5>Array Technology</h5>
						<span>April 2016</span>
					</li>
					<li data-content="bigwing">
						<h5>BigWing Interactive</h5>
						<span>July 2015</span>
					</li>
					<li data-content="rehash">
						<h5>Rehash</h5>
						<span>December 2013</span>
					</li>
					<li data-content="frontline">
						<h5>Frontline Church</h5>
						<span>September 2012</span>
					</li>
					<li data-content="faa">
						<h5>FAA</h5>
						<span>July 2010</span>
					</li>
					<li data-content="medencentive">
						<h5>MedEncentive</h5>
						<span>March 2008</span>
					</li>
				</ul> 
			</nav>
		</div> 
	</section> 
-->
<section id="partnerships-container" class="main-content white-bg content-sep">
	<div class="page-container">
		<header class="richtext">
			<h3><?php echo esc_html( $partnerships_title ); ?></h3>
		</header>
		<div class="row">
			<ul class="col col-25">
				<?php echo wpautop( $partnership_1 ); ?>
			</ul>
			<ul class="col col-25">
				<?php echo wpautop( $partnership_2 ); ?>
			</ul>
			<ul class="col col-25">
				<?php echo wpautop( $partnership_3 ); ?>
			</ul>
			<ul class="col col-25">
				<?php echo wpautop( $partnership_4 ); ?>
			</ul>
		</div><!-- row -->
	</div><!-- page-container -->
</section><!-- experience-container -->
<section id="toolset-container" class="main-content white-bg">
	<div class="page-container">
		<?php get_template_part('template-parts/toolset'); ?>
	</div><!-- page-conteiner -->
</section><!-- toolset-container -->
</main><!-- main-content -->
<?php get_footer(); ?>