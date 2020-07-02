<?php 

// contract_description customizer panel
        $wp_customize->add_panel('techflyte_contractor_panel',array(
            'title'             =>"Contractor",
            'Description'       =>"You can customize Contractor page, description, image etc",
            'priority'          =>198,
        ));


        // settings


       $wp_customize->add_setting('contract_image', array(

        ));

     $wp_customize->add_setting('contract_description', array(

        ));



         $wp_customize->add_setting('constractor_step_one', array(

        ));
         $wp_customize->add_setting('constractor_step_two', array(

        ));
         $wp_customize->add_setting('constractor_step_three', array(

        ));

    // section 
    

     $wp_customize->add_section( 'contract_image_section' , array(
        'title'         => __( 'Contractor Image', 'techfylte' ),
        'priority'      => 165,
        'panel'         =>'techflyte_contractor_panel',
    ) );

    
     $wp_customize->add_section( 'contract_description_section' , array(
        'title'         => __( 'Contractor Description', 'techfylte' ),
        'priority'      => 165,
        'panel'         =>'techflyte_contractor_panel',
    ) );

    

     $wp_customize->add_section( 'constractor_step_one_section' , array(
        'title'         => __( 'Step One Description', 'techfylte' ),
        'priority'      => 165,
        'panel'         =>'techflyte_contractor_panel',
    ) );

    $wp_customize->add_section( 'constractor_step_two_section' , array(
        'title'         => __( 'Step two Description', 'techfylte' ),
        'priority'      => 165,
        'panel'         =>'techflyte_contractor_panel',
    ) );

     $wp_customize->add_section( 'constractor_step_three_section' , array(
        'title'         => __( 'Step three Description', 'techfylte' ),
        'priority'      => 165,
        'panel'         =>'techflyte_contractor_panel',
    ) );


    // controller

    $wp_customize->add_control('contract_description_controller', array(
        'label'             =>__('Main Description', 'techflyte'),
        'type'              =>'textarea',
        'section'           =>'contract_description_section',
        'settings'          =>'contract_description',
        'input_attrs'       =>array(
            'placeholder'   => __(
                'Contractor Description', 'techflyte'
            )
        )

    ));


     $wp_customize->add_control( 
                new WP_Customize_Upload_Control( 
                $wp_customize, 
                'contract_image', 
                array(
                    'label'      => __( 'Contractor Main Image', 'techflyte' ),
                    'section'    => 'contract_image_section',
                    'settings'   => 'contract_image',
                ) ) 
                    );

 $wp_customize->add_control('constractor_step_one_controller', array(
        'label'             =>__('Process One', 'techflyte'),
        'type'              =>'textarea',
        'section'           =>'constractor_step_one_section',
        'settings'          =>'constractor_step_one',
        'input_attrs'       =>array(
            'placeholder'   => __(
                'Contractor Description', 'techflyte'
            )
        )

    ));
     $wp_customize->add_control('constractor_step_two_controller', array(
        'label'             =>__('Process two', 'techflyte'),
        'type'              =>'textarea',
        'section'           =>'constractor_step_two_section',
        'settings'          =>'constractor_step_two',
        'input_attrs'       =>array(
            'placeholder'   => __(
                'Contractor Description', 'techflyte'
            )
        )

    ));
     $wp_customize->add_control('constractor_step_three_controller', array(
        'label'             =>__('Process Three', 'techflyte'),
        'type'              =>'textarea',
        'section'           =>'constractor_step_three_section',
        'settings'          =>'constractor_step_three',
        'input_attrs'       =>array(
            'placeholder'   => __(
                'Contractor Description', 'techflyte'
            )
        )

    ));