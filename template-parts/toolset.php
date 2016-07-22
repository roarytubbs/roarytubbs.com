<?php
$toolset_logos = get_post_meta( get_the_ID(), '_cf_toolset_logos', true);
cmb2_output_file_list( '_cf_toolset_logos', 'small', 'col-sm-1' );
?>