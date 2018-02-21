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

    /* CUSTOM HEADER */
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
        'type'       => 'textarea_code',
        ) );
    $cmb->add_field( array(
        'name' => __( 'Subtitle', 'cmb2' ),
        'id'   => $prefix . 'subtitle',
        'type' => 'text',
        ) );
    $cmb->add_field( array(
        'name'    => 'Select Background Image',
        'desc'    => '',
        'id'      => $prefix . 'background_img',
        'type'    => 'file',
        'options' => array(
        'url' => false, // Hide the text input for the url
        ),
        ) );
    $cmb->add_field( array(
        'name' => __( 'Background Position', 'cmb2' ),
        'id'   => $prefix . 'bg_position',
        'type' => 'text',
        'description' => 'Enter in CSS positioning (ex 50% 50%)',
        ) );
    $cmb->add_field( array(
        'name' => __( 'CTA Text', 'cmb2' ),
        'id'   => $prefix . 'cta_text',
        'type' => 'text',
        ) );
    $cmb->add_field( array(
        'name' => __( 'CTA Link', 'cmb2' ),
        'id'   => $prefix . 'cta_link',
        'type' => 'text',
        ) );
    $cmb->add_field( array(
        'name' => __( 'Custom Code', 'cmb2' ),
        'id'   => $prefix . 'custom_code',
        'type' => 'textarea_code'
        ) );
    /* SKILLSET */
    $cmb = new_cmb2_box( array(
        'id'          => 'cf_skillset',
        'title'         => __( 'Skillset', 'cmb2' ),
        'object_types'  => array( 'page', ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/experience.php' ),
        'priority' => 'high',
        'closed'     => true,
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
    /* WORKS BUTTON */
    $cmb = new_cmb2_box( array(
        'id'          => 'cf_works_button',
        'title'         => __( 'Button', 'cmb2' ),
        'object_types'  => array( 'page', ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/work.php' ),
        'priority' => 'high',
        'closed'     => true
        ) );
    $cmb->add_field( array(
        'name' => __( 'Button Text', 'cmb2' ),
        'id'   => $prefix . 'work_button_text',
        'type' => 'text'
        ) );
    $cmb->add_field( array(
        'name' => __( 'Button URL', 'cmb2' ),
        'id'   => $prefix . 'work_button_url',
        'type' => 'text'
        ) );
    /* PARTNERSHIP */
    $cmb = new_cmb2_box( array(
        'id'          => 'cf_partnerships',
        'title'         => __( 'Partnerships', 'cmb2' ),
        'object_types'  => array( 'page', ),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/experience.php' ),
        'priority' => 'high',
        'closed'     => true
        ) );
    $cmb->add_field( array(
        'name'       => __( 'Section Title', 'cmb2' ),
        'id'         => $prefix . 'partnerships_title',
        'type'       => 'text'
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
    /* TOOLSET */
    $cmb = new_cmb2_box( array(
        'id'          => 'cf_toolset',
        'title'         => __( 'Toolset ', 'cmb2' ),
        'object_types'  => array( 'page', 'works',),
        'show_on'      => array( 'key' => 'page-template', 'value' => 'templates/experience.php', 'key' => 'post-type', 'value' => 'works' ),
        'priority' => 'high',
        'closed'     => true
        ) );
    $cmb->add_field( array(
        'name' => __( 'Toolset Title', 'cmb2' ),
        'id'   => $prefix . 'toolset_title',
        'type' => 'text'
        ) );
    $cmb->add_field( array(
        'name' => __( 'Select Logos', 'cmb2' ),
        'id'   => $prefix . 'toolset_logos',
        'type' => 'file_list'
        ) );

    /* ==============
        WORKS ONLY
     ============== */
     /* MODULES */
    $cmb = new_cmb2_box( array(
        'id'          => 'cf_modules',
        'title'         => __( 'Modules ', 'cmb2' ),
        'object_types'  => array( 'works',),
        'show_on'      => array( 'key' => 'post-type', 'value' => 'works'
            ),
        'priority' => 'high',
        'closed'     => false,
        ) );
    $module_group_field_id = $cmb->add_field( array(
        'id'          => $prefix . 'module_repeat_group',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => __( 'Module {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'    => __( 'Add Another Module', 'cmb2' ),
            'remove_button' => __( 'Remove Module', 'cmb2' ),
            'sortable'      => true, // beta
            // 'closed'     => true, // true to have the groups closed by default
        ),
    ) );
    $cmb->add_group_field( $module_group_field_id, array(
        'name' => __( 'Module Type', 'cmb2' ),
        'id'   => $prefix . 'module_type_selection',
        'type'             => 'select',
        'show_option_none' => true,
        'default'          => 'none',
        'options' => array(
            'medium-width' => __( 'Medium Width', 'cmb2' ),
            'large-width'    => __( 'Large Width', 'cmb2' ),
            'image'    => __( 'Image', 'cmb2' ),
            'slider'    => __( 'Slider', 'cmb2' ),
            'full-width-image'    => __( 'Full Width Image', 'cmb2' ),
        ),
    ) );
    $cmb->add_group_field( $module_group_field_id, array(
        'name' => __( 'Title', 'cmb2' ),
        'id'   => $prefix . 'module_title',
        'type' => 'text',
    ) );
    $cmb->add_group_field( $module_group_field_id, array(
        'name' => __( 'Sub Title', 'cmb2' ),
        'id'   => $prefix . 'module_sub_title',
        'type' => 'text',
    ) );
    $cmb->add_group_field( $module_group_field_id, array(
        'name' => __( 'Content', 'cmb2' ),
        'id'   => $prefix . 'module_content',
        'type'    => 'textarea_code',
    ) );
    $cmb->add_group_field( $module_group_field_id, array(
        'name' => __( 'Image', 'cmb2' ),
        'id'   => $prefix . 'module_image',
        'type'    => 'file',
        // Optional:
        'options' => array(
            'url' => false, // Hide the text input for the url
        ),
    ) );
    $cmb->add_group_field( $module_group_field_id, array(
        'name' => __( 'Slider', 'cmb2' ),
        'id'   => $prefix . 'module_slider',
        'type'    => 'text',
    ) );
    $cmb->add_group_field( $module_group_field_id, array(
        'name' => __( 'Rounded Corners', 'cmb2' ),
        'id'   => $prefix . 'module_image_rounded_corners',
        'type'    => 'checkbox',
    ) );
    $cmb->add_group_field( $module_group_field_id, array(
        'name' => __( 'Drop Shadow', 'cmb2' ),
        'id'   => $prefix . 'module_image_dropshadow',
        'type'    => 'checkbox',
    ) );
    $cmb->add_group_field( $module_group_field_id, array(
        'name' => __( 'Background Color', 'cmb2' ),
        'id'   => $prefix . 'custom_bg_color',
        'type'    => 'colorpicker',
        'default' => '',
        // 'options' => array(
        //  'alpha' => true, // Make this a rgba color picker.
        // ),
    ) );
    /* CREDIT */
    $cmb = new_cmb2_box( array(
        'id'          => 'cf_credit',
        'title'         => __( 'Credit ', 'cmb2' ),
        'object_types'  => array( 'works',),
        'show_on'      => array( 'key' => 'post-type', 'value' => 'works'
            ),
        'priority' => 'high',
        'closed'     => true,
        ) );
    $cmb->add_field( array(
        'name' => __( 'Credit Title', 'cmb2' ),
        'id'   => $prefix . 'credit_title',
        'type' => 'text'
        ) );
    $cmb->add_field( array(
        'name' => __( 'Credit Description', 'cmb2' ),
        'id'   => $prefix . 'credit_desc',
        'type' => 'textarea'
        ) );
    $group_field_id = $cmb->add_field( array(
        'id'          => $prefix . 'credit_repeat_group',
        'type'        => 'group',
        'options'     => array(
            'group_title'   => __( 'Entry {#}', 'cmb2' ), // since version 1.1.4, {#} gets replaced by row number
            'add_button'    => __( 'Add Another Entry', 'cmb2' ),
            'remove_button' => __( 'Remove Entry', 'cmb2' ),
            'sortable'      => true, // beta
            // 'closed'     => true, // true to have the groups closed by default
        ),
    ) );
    $cmb->add_group_field( $group_field_id, array(
        'name' => __( 'Name', 'cmb2' ),
        'id'   => $prefix . 'credit_name',
        'type' => 'text',
        ) );
    $cmb->add_group_field( $group_field_id, array(
        'name' => __( 'Link', 'cmb2' ),
        'id'   => $prefix . 'credit_link',
        'type' => 'text',
    ) );
    /* CUSTOM CSS */
    $cmb = new_cmb2_box( array(
        'id'            => 'cf_custom_css',
        'title'         => __( 'Custom CSS', 'cmb2' ),
        'object_types'  => array( 'works', ),
        'priority'      => 'low',
        'closed'     => true
        ) );
    $cmb->add_field( array(
        'name' => __( 'Custom CSS', 'cmb2' ),
        'id'   => $prefix . 'custom_css',
        'desc'          => 'code will be injected in the header',
        'type' => 'textarea_code'
        ) );
    /* CUSTOM JS */
    $cmb = new_cmb2_box( array(
        'id'            => 'cf_custom_js',
        'title'         => __( 'Custom JavaScript', 'cmb2' ),
        'object_types'  => array( 'works', ),
        'priority'      => 'low',
        'closed'     => true
        ) );
    $cmb->add_field( array(
        'name' => __( 'Custom JavaScript', 'cmb2' ),
        'id'   => $prefix . 'custom_js',
        'desc'          => 'code will be injected in the footer',
        'type' => 'textarea_code'
        ) );
    /* THUMBNAIL */
    $cmb = new_cmb2_box( array(
        'id'          => 'cf_thumbnail',
        'title'         => __( 'Thumbnail ', 'cmb2' ),
        'object_types'  => array( 'works', ),
        'context'      => 'side', //  'normal', 'advanced', or 'side'
        'show_on'      => array( 'key' => 'post-type', 'value' => 'works' ),
        'priority' => 'low',
        'closed'     => true,
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
function cmb2_output_file_list( $file_list_meta_key, $img_size = 'medium' ) {

    // Get the list of files
    $files = get_post_meta( get_the_ID(), $file_list_meta_key, 1 );

    echo '<ul class="box">';
    // Loop through them and output an image
    foreach ( (array) $files as $attachment_id => $attachment_url ) {
        echo '<li class="box-item box-item-10"><span class="tint">';
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