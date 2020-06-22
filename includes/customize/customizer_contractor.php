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

