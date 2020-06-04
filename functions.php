<?php 


// features


add_theme_support( 'post-thumbnails', array( 'post','team' ) );

// includes



include(get_theme_file_path( '/includes/front/enqueue.php' ));
include(get_theme_file_path('/setup.php'));
include(get_theme_file_path('/team.php'));
include(get_theme_file_path('/includes/customizer.php'));







// hooks

add_action( 'wp_enqueue_scripts', 'tech_enqueue_files' );
add_action( 'after_setup_theme', 'tech_setup_theme');
add_action( 'customize_register', 'mytheme_customize_register'); 
//  add_action( 'after_setup_theme', 'mytheme_register_nav_menu');
//custom post type hook
add_action('init', 'team_register');

// meta box
add_action("admin_init", "admin_init");



add_action( 'wp_print_styles', 'wps_dequeue_styles', 100 );
function wps_dequeue_styles() {
    wp_dequeue_style( 'wpcf7_enqueue_styles');
}





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



