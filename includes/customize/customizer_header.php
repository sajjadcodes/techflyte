<?php 

$wp_customize->add_panel('techflyte_header_panel',array(
        'title'             => 'TechFlyte Header Settings',
        'Description'       =>'You can customize header of the theme, like logo, social media url etc',
        'priority'          =>'10',
    ));



	// customizer settings
  $wp_customize->add_setting( 'facebook_social_links' , array(
    
) );
$wp_customize->add_setting( 'twitter_social_links' , array(
    
) );

$wp_customize->add_setting( 'linkedin_social_links' , array(
    
) );

// customizer sections

$wp_customize->add_section( 'header_social_links_section' , array(
    'title'         => __( 'Social Media Links', 'techfylte' ),
    'priority'      => 30,
    'panel'         =>'techflyte_header_panel',
) );


// customizer control


$wp_customize->add_control('facebook_links_controller', array(
	'label'         => __( 'Facebook URL', 'techfylte' ),
	'section'       => 'header_social_links_section',
    'settings'      => 'facebook_social_links',
    'input_attrs'   => array(
            'placeholder' => __( 'username', 'techflyte'),   
        )
 ) );

 $wp_customize->add_control('twitter_links_controller', array(
	'label'      => __( 'Twitter URL', 'techfylte' ),
	'section'    => 'header_social_links_section',
	'settings'   => 'twitter_social_links',
 ) );
 $wp_customize->add_control('linkedin_links_controller', array(
	'label'      => __( 'LinkedIn URL', 'techfylte' ),
	'section'    => 'header_social_links_section',
	'settings'   => 'linkedin_social_links',
 ) );

 $wp_customize->add_control('instragram_links_controller', array(
	'label'      => __( 'Instagram URL', 'techfylte' ),
	'section'    => 'header_social_links_section',
	'settings'   => 'linkedin_social_links',
 ) );
