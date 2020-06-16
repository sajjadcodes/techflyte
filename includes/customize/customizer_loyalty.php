<?php 


// loyalty customizer panel
        $wp_customize->add_panel('techflyte_loyalty_panel',array(
            'title'             =>"Loyalty",
            'Description'       =>"You can customize loyalty page, description, image etc",
            'priority'          =>199,
        ));




        // customizer settings

  $wp_customize->add_setting('loyalty_subtitle', array(

        ));

$wp_customize->add_setting('loyalty_description', array(

        ));
$wp_customize->add_setting('loyalty_image', array(

        ));


// section

$wp_customize->add_section( 'loyalty_subtitle_section' , array(
            'title'         => __( 'Loyalty Subtitle', 'techfylte' ),
            'priority'      => 165,
            'panel'         =>'techflyte_loyalty_panel',
        ) );
$wp_customize->add_section( 'loyalty_description_section' , array(
            'title'         => __( 'Loyalty Description', 'techfylte' ),
            'priority'      => 170,
            'panel'         =>'techflyte_loyalty_panel',
        ) );

$wp_customize->add_section( 'loyalty_image_section' , array(
            'title'         => __( 'Loyalty Image', 'techfylte' ),
            'priority'      => 175,
            'panel'         =>'techflyte_loyalty_panel',
        ) );

// controller

 $wp_customize->add_control('loyalty_subtitle_controller', array(
        'label'             =>__('Subtitle', 'techflyte'),
        'section'           =>'loyalty_subtitle_section',
        'settings'          =>'loyalty_subtitle',
        'input_attrs'       =>array(
            'placeholder'   => __(
                'Loyalty subtitle', 'techflyte'
            )
        )

    ));


 $wp_customize->add_control('loyalty_description_controller', array(
        'label'             =>__('Main Description', 'techflyte'),
        'type'              =>'textarea',
        'section'           =>'loyalty_description_section',
        'settings'          =>'loyalty_description',
        'input_attrs'       =>array(
            'placeholder'   => __(
                'Loyalty Description', 'techflyte'
            )
        )

    ));


     $wp_customize->add_control( 
        new WP_Customize_Upload_Control( 
        $wp_customize, 
        'loyalty_image', 
        array(
            'label'      => __( 'Safety Main Image', 'techflyte' ),
            'section'    => 'loyalty_image_section',
            'settings'   => 'loyalty_image',
        ) ) 
            );