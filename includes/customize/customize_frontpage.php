<?php 

        $wp_customize->add_panel('techflyte_home_panel',array(
        'title'                 => 'Frontpage Settings',
        'Description'           =>'You can customize homepage like different section Title and subtitle',
        'priority'              =>190,
        ));

// customizer settings for Hero settings
        $wp_customize->add_setting( 'home_title' , array(
            
        ) );
        $wp_customize->add_setting( 'home_subtitle' , array(
            
        ) );

        $wp_customize->add_setting( 'home_description' , array(
            
        ) );


// settings for Resume
        $wp_customize->add_setting('resume_title',array(

        ));
         $wp_customize->add_setting('resume_description',array(

        ));

        $wp_customize->add_setting('resume_image',array(

        ));
// settings for why section

         $wp_customize->add_setting('why_title',array(

        ));
        $wp_customize->add_setting('why_description',array(

        ));
        
// customizer sections for Hero  Section
                   
        $wp_customize->add_section( 'home_title' , array(
            'title'              => __( 'Add  Home Title', 'techfylte' ),
            'priority'           => 180,
            'panel'              =>'techflyte_home_panel',
        ) );


        $wp_customize->add_section('home_subtitle',array(
          'title'                 => __('Add Home subtitle','techfylte'),
          'priority'              =>185,
          'panel'                 =>'techflyte_home_panel',
        ));

         $wp_customize->add_section('home_description_section',array(
          'title'                 => __('Add Home description','techfylte'),
          'priority'              =>190,
          'panel'                 =>'techflyte_home_panel',
        ));


// resume section

        $wp_customize->add_section('home_resume_title',array(
          'title'                 => __('Add Resume Title','techfylte'),
          'priority'              =>195,
          'panel'                 =>'techflyte_home_panel',
        ));
       $wp_customize->add_section('home_resume_description',array(
          'title'                 => __('Add Resume Description','techfylte'),
          'priority'              =>200,
          'panel'                 =>'techflyte_home_panel',
        )); 

        $wp_customize->add_section('home_resume_image',array(
          'title'                 => __('Upload image Resume section','techfylte'),
          'priority'              =>200,
          'panel'                 =>'techflyte_home_panel',
        ));
// why section 
        $wp_customize->add_section('home_why_title',array(
          'title'                 => __('Add Why Title','techfylte'),
          'priority'              =>200,
          'panel'                 =>'techflyte_home_panel',
        ));
        $wp_customize->add_section('home_why_description',array(
          'title'                 => __('Add Why description','techfylte'),
          'priority'              =>210,
          'panel'                 =>'techflyte_home_panel',
        ));


// customizer control for Hero controller
                        
        $wp_customize->add_control('home_title_controller', array(
            'label'             => __( 'Header Title', 'techfylte' ),
            'section'           => 'home_title',
            'settings'          => 'home_title',
            'input_attrs'   => array(
                    'placeholder' => __( 'Title', 'techflyte'),   
                )
        ) );
        
          $wp_customize->add_control('home_subtitle_controller', array(
            'label'             => __( 'Header Subtitle', 'techfylte' ),
            'section'           => 'home_subtitle',
            'settings'          => 'home_subtitle',
            'input_attrs'       => array(
                    'placeholder' => __( 'subtitle', 'techflyte'),   
                )
        ) );
        
          $wp_customize->add_control('home_description_controller', array(
            'label'             => __( 'Header Description', 'techfylte' ),
            'section'           => 'home_description_section',
            'settings'          => 'home_description',
            'input_attrs'       => array(
                    'placeholder' => __( 'Description', 'techflyte'),   
                )
        ) );
// customize resume controller

          $wp_customize->add_control('home_resume_title_controller', array(
            'label'             => __( 'Resume Title', 'techfylte' ),
            'section'           => 'home_resume_title',
            'settings'          => 'resume_title',
            'input_attrs'   => array(
                    'placeholder' => __( 'Resume section title', 'techflyte'),   
                )
        ) );

           $wp_customize->add_control('home_resume_description_controller', array(
            'label'             => __( 'Resume Description', 'techfylte' ),
            'type'              =>'textarea',
            'section'           => 'home_resume_description',
            'settings'          => 'resume_description',
            'input_attrs'   => array(
                    'placeholder' => __( 'Resume section Description', 'techflyte'),   
                )
        ) );


        $wp_customize->add_control( 
	new WP_Customize_Upload_Control( 
	$wp_customize, 
	'resume_image', 
	array(
		'label'      => __( 'Resume opposite side image', 'techflyte' ),
		'section'    => 'home_resume_image',
		'settings'   => 'resume_image',
	) ) 
        );

// why customizer controller

           $wp_customize->add_control('home_why_title_controller', array(
            'label'             => __( 'Why Title', 'techfylte' ),
            'section'           => 'home_why_title',
            'settings'          => 'why_title',
            'input_attrs'   => array(
                    'placeholder' => __( 'Why section title', 'techflyte'),   
                )
        ) );

           $wp_customize->add_control('home_why_description_controller', array(
            'label'             => __( 'Why description', 'techfylte' ),
            'type'              =>'textarea',
            'section'           => 'home_why_description',
            'settings'          => 'why_description',
            'input_attrs'   => array(
                    'placeholder' => __( 'Why section description', 'techflyte'),   
                )
        ) );

        

        