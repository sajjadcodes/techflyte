<?php 



// includes



include(get_theme_file_path( '/includes/front/enqueue.php' ));
include(get_theme_file_path('/setup.php'));





// hooks

add_action( 'wp_enqueue_scripts', 'tech_enqueue_files' );
add_action( 'after_setup_theme', 'tech_custom_menu');





// Option page



if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Techflyte Theme General  Settings',
		'menu_title'	=> 'TechFlyte Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
}