<?php 

        $wp_customize->add_panel('techflyte_home_panel',array(
        'title'             => 'TechFlyte Homepage Settings',
        'Description'       =>'You can customize homepage like different section Title and subtitle',
        'priority'          =>190,
        ));

// customizer settings for Resume Section
        $wp_customize->add_setting( 'home_section_header_one' , array(
            
        ) );
        $wp_customize->add_setting( 'home_section_header_two' , array(
            
        ) );
        
// customizer sections for Resume Section
                   
        $wp_customize->add_section( 'home_section_one' , array(
            'title'         => __( 'Home section Resume', 'techfylte' ),
            'priority'      => 180,
            'panel'         =>'techflyte_home_panel',
        ) );

// customizer control for Resume Section
                        
        $wp_customize->add_control('home_section_one_header', array(
            'label'      => __( 'Resume Header', 'techfylte' ),
            'section'    => 'home_section_one',
            'settings'   => 'home_section_header_one',
            'input_attrs'   => array(
                    'placeholder' => __( 'Header', 'techflyte'),   
                )
        ) );
        
