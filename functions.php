<?php 



// includes



include(get_theme_file_path( '/includes/front/enqueue.php' ));
include(get_theme_file_path('/setup.php'));





// hooks

add_action( 'wp_enqueue_scripts', 'tech_enqueue_files' );
add_action( 'after_setup_theme', 'tech_custom_menu');



