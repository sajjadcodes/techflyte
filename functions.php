<?php 

// Exit if accessed directly
	defined('ABSPATH') || exit;

	// includes
			$techflyte_includes = array(
				'/setup.php',
				'/includes/front/enqueue.php',
				'/includes/customizer.php',
				'includes/cpts/team/team-cpt.php',
				'includes/cpts/faq/faq-cpt.php',
				'includes/cpts/benefits/benefits-cpt.php',
				'includes/cpts/partner/partner-cpt.php',
			);

			foreach($techflyte_includes as $file){
				
				require_once(get_theme_file_path($file)); 
			}

		
// hook
			$techflyte_init_hooks = array(
				'tech_team_cpt_init',
				'tech_faq_cpt_init',
				'tech_benefits_cpt_init',
				'tech_partner_cpt_init',
			);

		foreach($techflyte_init_hooks as $flyte_hook){
			add_action('init',$flyte_hook);
		}

 
		add_action( 'wp_enqueue_scripts', 'tech_enqueue_files' );
		add_action( 'after_setup_theme', 'tech_setup_theme');
		add_action( 'customize_register', 'mytheme_customize_register'); 
		add_action('after_switch_theme','my_rewrite_flush');


