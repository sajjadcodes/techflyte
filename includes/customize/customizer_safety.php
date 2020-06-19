<?php 


// safety customizer panel
        $wp_customize->add_panel('techflyte_safety_panel',array(
            'title'             =>"Safety",
            'Description'       =>"You can customize Safety page, description, image etc",
            'priority'          =>198,
        ));



// safety_description settings

        
        $wp_customize->add_setting('safety_text_one', array(

        ));

         $wp_customize->add_setting('safety_subtitle', array(

        ));
          $wp_customize->add_setting('safety_image', array(

        ));
// safety_subtitle_two
       

        $wp_customize->add_setting('safety_description', array(

        ));

        $wp_customize->add_setting('safety_description_secondary', array(

        ));


        // sections

        $wp_customize->add_section( 'safety_text_one_section' , array(
            'title'         => __( 'Safety Text One', 'techfylte' ),
            'priority'      => 165,
            'panel'         =>'techflyte_safety_panel',
        ) );

        $wp_customize->add_section( 'safety_subtitle_section' , array(
            'title'         => __( 'Safety subtitle', 'techfylte' ),
            'priority'      => 166,
            'panel'         =>'techflyte_safety_panel',
        ) );

         $wp_customize->add_section( 'safety_image_section' , array(
            'title'         => __( 'Safety image', 'techfylte' ),
            'priority'      => 167,
            'panel'         =>'techflyte_safety_panel',
        ) );
        
        $wp_customize->add_section( 'safety_description_section' , array(
        'title'         => __( 'Safety Description', 'techfylte' ),
        'priority'      => 168,
        'panel'         =>'techflyte_safety_panel',
        ) );

         $wp_customize->add_section( 'safety_description_secondary_section' , array(
            'title'         => __( 'safety Description Secondary', 'techfylte' ),
            'priority'      => 169,
            'panel'         =>'techflyte_safety_panel',
        ) );

        // safety_description


        // controller

        $wp_customize->add_control('safety_text_one_controller', array(
        'label'             =>__('Main Description', 'techflyte'),
        'type'              =>'textarea',
        'section'           =>'safety_text_one_section',
        'settings'          =>'safety_text_one',
        'input_attrs'       =>array(
            'placeholder'   => __(
                'Safety Description', 'techflyte'
            )
        )

    ));

    $wp_customize->add_control('safety_subtitle_controller', array(
        'label'             =>__('Main Description', 'techflyte'),
        'section'           =>'safety_subtitle_section',
        'settings'          =>'safety_subtitle',
        'input_attrs'       =>array(
            'placeholder'   => __(
                'safety subtitle', 'techflyte'
            )
        )

    ));


     $wp_customize->add_control( 
        new WP_Customize_Upload_Control( 
        $wp_customize, 
        'safety_image', 
        array(
            'label'      => __( 'Safety Main Image', 'techflyte' ),
            'section'    => 'safety_image_section',
            'settings'   => 'safety_image',
        ) ) 
            );
    //safety_subtitle


        
        $wp_customize->add_control('safety_description_controller', array(
        'label'             =>__('Safety Description', 'techflyte'),
        'type'              =>'textarea',
        'section'           =>'safety_description_section',
        'settings'          =>'safety_description',
        'input_attrs'       =>array(
            'placeholder'   => __(
                'safety description', 'techflyte'
            )
        )

       ));
       $wp_customize->add_control('safety_description_secondary_controller', array(
                'label'             =>__('Secondary Description ', 'techflyte'),
                'type'              =>'textarea',
                'section'           =>'safety_description_secondary_section',
                'settings'          =>'safety_description_secondary',
                'input_attrs'       =>array(
                    'placeholder'   => __(
                        'safety subtitle Two', 'techflyte'
                    )
                )

            ));