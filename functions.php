<?php 


// includes

			include(get_theme_file_path( '/includes/front/enqueue.php' ));
			include(get_theme_file_path('/setup.php'));
			include(get_theme_file_path('/includes/customizer.php'));
	 // CPTs
			include(get_theme_file_path( 'includes/cpts/team/team-cpt.php'));
			include(get_theme_file_path( 'includes/cpts/faq/faq-cpt.php'));
			include(get_theme_file_path('includes/cpts/benefits/benefits-cpt.php'));


// hooks
			add_action( 'wp_enqueue_scripts', 'tech_enqueue_files' );
			add_action( 'after_setup_theme', 'tech_setup_theme');
			add_action( 'customize_register', 'mytheme_customize_register'); 
			add_action( 'init', 'tech_team_cpt_init' );
			add_action( 'init', 'tech_faq_cpt_init' );
			add_action( 'init', 'tech_benefits_cpt_init');



// Option page using ACF
			if( function_exists('acf_add_options_page') ) {
				
				acf_add_options_page(array(
					'page_title' 	=> 'Techflyte Theme General  Settings',
					'menu_title'	=> 'TechFlyte Settings',
					'menu_slug' 	=> 'theme-general-settings',
					'capability'	=> 'edit_posts',
					'redirect'		=> false
				));
				
			}




