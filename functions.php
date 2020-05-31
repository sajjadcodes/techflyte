<?php 



// includes

include(get_theme_file_path( '/includes/front/enqueue.php' ));




// hooks

add_action( 'wp_enqueue_scripts', 'tech_enqueue_files' );



