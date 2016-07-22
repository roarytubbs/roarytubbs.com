<?

add_action( 'cmb2_admin_init', 'cmb2_custom_metaboxes' );
/**
 * Define the metabox and field configurations.
 */
function cmb2_custom_metaboxes() {

    // Start with an underscore to hide fields from custom fields list
    $prefix = '_cf_';

    /**
     * Initiate the metabox
     */
    /*
        Custom Header
    */

    $cmb = new_cmb2_box( array(
        'id'            => 'cf_custom_header',
        'title'         => __( 'Custom Header', 'cmb2' ),
        'object_types'  => array( 'page', 'works', ),
        'priority'      => 'high',
        'closed'     => true,
        ) );
    $cmb->add_field( array(
        'name'       => __( 'Title', 'cmb2' ),
        'id'         => $prefix . 'title',
        'type'       => 'text',
        ) );
    $cmb->add_field( array(
        'name' => __( 'Subtitle', 'cmb2' ),
        'id'   => $prefix . 'subtitle',
        'type' => 'text',
        ) );
    $cmb->add_field( array(
        'name' => __( 'Background Position', 'cmb2' ),
        'id'   => $prefix . 'bg_position',
        'type' => 'text',
        'description' => 'Enter in CSS positioning (ex 50% 50%)',
        ) );
    /*
        Skillset
    */
    $cmb = new_cmb2_box( array(
        'id'          => 'cf_skillset',
        'title'         => __( 'Skillset', 'cmb2' ),
        'object_types'  => array( 'page', ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/experience.php' ),
        'priority' => 'high',
        ) );
    $cmb->add_field( array(
        'name' => __( 'List one', 'cmb2' ),
        'id'   => $prefix . 'skillset_list_one',
        'type' => 'textarea_small'
        ) );
    $cmb->add_field( array(
        'name' => __( 'List two', 'cmb2' ),
        'id'   => $prefix . 'skillset_list_two',
        'type' => 'textarea_small'
        ) );
    $cmb->add_field( array(
        'name' => __( 'List three', 'cmb2' ),
        'id'   => $prefix . 'skillset_list_three',
        'type' => 'textarea_small'
        ) );
    $cmb->add_field( array(
        'name' => __( 'List four', 'cmb2' ),
        'id'   => $prefix . 'skillset_list_four',
        'type' => 'textarea_small'
        ) );
    /*
        Partnerships
    */
    $cmb = new_cmb2_box( array(
        'id'          => 'cf_partnerships',
        'title'         => __( 'Partnerships', 'cmb2' ),
        'object_types'  => array( 'page', ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/experience.php' ),
        'priority' => 'high',
        ) );
    $cmb->add_field( array(
        'name'       => __( 'Section Title', 'cmb2' ),
        'id'         => $prefix . 'partnerships_title',
        'type'       => 'text',
        ) );
    $cmb->add_field( array(
        'name' => __( 'List one', 'cmb2' ),
        'id'   => $prefix . 'partnership_list_one',
        'type' => 'textarea_small'
        ) );
    $cmb->add_field( array(
        'name' => __( 'List two', 'cmb2' ),
        'id'   => $prefix . 'partnership_list_two',
        'type' => 'textarea_small'
        ) );
    $cmb->add_field( array(
        'name' => __( 'List three', 'cmb2' ),
        'id'   => $prefix . 'partnership_list_three',
        'type' => 'textarea_small'
        ) );
    $cmb->add_field( array(
        'name' => __( 'List four', 'cmb2' ),
        'id'   => $prefix . 'partnership_list_four',
        'type' => 'textarea_small'
        ) );
    /*
        Toolset
    */
    $cmb = new_cmb2_box( array(
        'id'          => 'cf_toolset',
        'title'         => __( 'Toolset ', 'cmb2' ),
        'object_types'  => array( 'page', 'works'),
        'show_on'      => array(
                'key' => 'page-template', 'value' => 'templates/experience.php',
                'key' => 'post-type', 'value' => 'works'
                ),
        'priority' => 'high',
        ) );
    $cmb->add_field( array(
        'name' => 'Select logos',
        'desc' => '',
        'id'   => $prefix . 'toolset_logos',
        'type' => 'file_list',
        ) );
    /*
        Thumbnail
    */
    $cmb = new_cmb2_box( array(
        'id'          => 'cf_thumbnail',
        'title'         => __( 'Thumbnail ', 'cmb2' ),
        'object_types'  => array( 'works', ),
        'context'      => 'side', //  'normal', 'advanced', or 'side'
        'show_on'      => array( 'key' => 'post-type', 'value' => 'works' ),
        'priority' => 'low',
        ) );
    $cmb->add_field( array(
        'name'    => 'Select Thumbnail',
        'desc'    => '',
        'id'      => $prefix . 'thumbnail_img',
        'type'    => 'file',
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
        ) );

}
/**
 * Sample template tag function for outputting a cmb2 file_list
 *
 * @param  string  $file_list_meta_key The field meta key. ('wiki_test_file_list')
 * @param  string  $img_size           Size of image to show
 */
function cmb2_output_file_list( $file_list_meta_key, $img_size = 'medium', $col_size ) {

    // Get the list of files
    $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );

    echo '<ul class="row">';
    // Loop through them and output an image
    foreach ( (array) $files as $attachment_id => $attachment_url ) {
        echo '<li class="' . $col_size . '"><span class="tint">';
        echo wp_get_attachment_image( $attachment_id, $img_size );
        echo '</span></li>';
    }
    echo '</ul>';
}

/**
 * Wrapper function around cmb2_get_option
 * @since  0.1.0
 * @param  string  $post_type Post type name
 * @param  string  $key Options array key
 * @return mixed        Option value
 */
function custom_theme_cpt_get_option( $post_type, $key ) {
    return cmb2_get_option( $post_type . '_options' , $key );
}

?>