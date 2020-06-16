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
        $wp_customize->add_setting('safety_subtitle_two', array(

        ));


        // sections

        $wp_customize->add_section( 'safety_text_one_section' , array(
            'title'         => __( 'Safety Text One', 'techfylte' ),
            'priority'      => 165,
            'panel'         =>'techflyte_safety_panel',
        ) );

        $wp_customize->add_section( 'safety_subtitle_section' , array(
            'title'         => __( 'Safety subtitle', 'techfylte' ),
            'priority'      => 165,
            'panel'         =>'techflyte_safety_panel',
        ) );

         $wp_customize->add_section( 'safety_image_section' , array(
            'title'         => __( 'Safety image', 'techfylte' ),
            'priority'      => 165,
            'panel'         =>'techflyte_safety_panel',
        ) );
         $wp_customize->add_section( 'safety_subtitle_two_section' , array(
            'title'         => __( 'Safety Subtitle Two', 'techfylte' ),
            'priority'      => 165,
            'panel'         =>'techflyte_safety_panel',
        ) );



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


        $wp_customize->add_control('safety_subtitle_two_controller', array(
                'label'             =>__('Main Description', 'techflyte'),
                'section'           =>'safety_subtitle_two_section',
                'settings'          =>'safety_subtitle_two',
                'input_attrs'       =>array(
                    'placeholder'   => __(
                        'safety subtitle Two', 'techflyte'
                    )
                )

            ));