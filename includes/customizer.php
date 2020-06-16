


<?php 

function mytheme_customize_register( $wp_customize )
{

include(get_theme_file_path('/includes/customize/customizer_header.php'));
include(get_theme_file_path('/includes/customize/customizer_footer.php'));
include(get_theme_file_path('/includes/customize/customize_frontpage.php'));
include(get_theme_file_path('/includes/customize/customizer_service.php'));
include(get_theme_file_path('/includes/customize/customizer_contractor.php'));
include(get_theme_file_path('/includes/customize/customizer_safety.php'));
include(get_theme_file_path('/includes/customize/customizer_loyalty.php'));


}
