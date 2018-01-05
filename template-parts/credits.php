<?php
$credit_title  = get_post_meta( get_the_ID(), '_cf_credit_title', true );
$credit_desc  = get_post_meta( get_the_ID(), '_cf_credit_desc', true );
$entries = get_post_meta( get_the_ID(), '_cf_credit_repeat_group', true );
?>
<?php
if ( ! post_password_required() ) {
    // Code to fetch and print CFs, such as:
    $key_1_value_1 = get_post_meta( $post->ID, 'key_1', true );
        echo $key_1_value_1;
?>
<section class="credits richtext">
	<header>
		<h3><?php echo esc_html( $credit_title ); ?></h3>
	</header>
	<p><?php echo esc_html( $credit_desc ); ?></p>
	<ul>
		<?php
		foreach ( (array) $entries as $key => $entry ) {

			$name = $link = '';

			if ( isset( $entry['_cf_credit_name'] ) ) {
				$name = esc_html( $entry['_cf_credit_name'] );
			}

			if ( isset( $entry['_cf_credit_link'] ) ) {
				$link = esc_html( $entry['_cf_credit_link'] );
			}

			if ( !empty( $link ) ) {
				printf ( '<li><a href="' . $link . '">' . $name . '</a></li>');
			} else {
				printf ( '<li>' . $name . '</li>' );
			}
		}
		?>
	</ul>
</section><!--toolset-->
<?php }