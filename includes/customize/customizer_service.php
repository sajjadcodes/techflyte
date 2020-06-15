<?php 


// servics customizer panel
        $wp_customize->add_panel('techflyte_services_panel',array(
                'title'             => 'Services',
                'Description'       =>'You can customize Service page. Title , description , images etc',
                'priority'          =>196,
            ));


// settings
        
        $wp_customize->add_setting('service_image', array(

        ));
         $wp_customize->add_setting( 'service_description' , array(
                    
                ) );
        $wp_customize->add_setting( 'service_title_two' , array(
                    
                ) );
        
        $wp_customize->add_setting( 'service_experience_description' , array(
                    
                ) );
        $wp_customize->add_setting( 'service_reputation_description' , array(
                    
                ) );
        $wp_customize->add_setting( 'service_price_description' , array(
                    
                ) );
        
            // Services description two
        $wp_customize->add_setting( 'service_description_two' , array(
            
        ) );
        // workflow
       
         $wp_customize->add_setting( 'pro_workforce' , array(
            
        ) );

                



// section 

          $wp_customize->add_section( 'service_image_section' , array(
                    'title'         => __( 'Service Image', 'techfylte' ),
                    'priority'      => 170,
                    'panel'         =>'techflyte_services_panel',
                ) );

        $wp_customize->add_section( 'service_description_section' , array(
                    'title'         => __( 'Service Description', 'techfylte' ),
                    'priority'      => 180,
                    'panel'         =>'techflyte_services_panel',
                ) );
         $wp_customize->add_section( 'service_title_two_section' , array(
                    'title'         => __( 'Title section Two', 'techfylte' ),
                    'priority'      => 190,
                    'panel'         =>'techflyte_services_panel',
                ) );
         $wp_customize->add_section( 'service_experience_description_section' , array(
                    'title'         => __( 'Experience  Description', 'techfylte' ),
                    'priority'      => 192,
                    'panel'         =>'techflyte_services_panel',
                ) );
         $wp_customize->add_section( 'service_reputation_description_section' , array(
                    'title'         => __( 'Reputation  Description', 'techfylte' ),
                    'priority'      => 194,
                    'panel'         =>'techflyte_services_panel',
                ) );

                
         $wp_customize->add_section( 'service_price_description_section' , array(
                    'title'         => __( 'Price  Description', 'techfylte' ),
                    'priority'      => 196,
                    'panel'         =>'techflyte_services_panel',
                ) );


        $wp_customize->add_section( 'service_description_two_section' , array(
            'title'         => __( 'Services Description Two', 'techfylte' ),
            'priority'      => 198,
            'panel'         =>'techflyte_services_panel',
        ) );
      
        $wp_customize->add_section( 'pro_workforce_section' , array(
            'title'         => __( 'Pro Workforce', 'techfylte' ),
            'priority'      => 200,
            'panel'         =>'techflyte_services_panel',
        ) );
// control

              $wp_customize->add_control( 
                new WP_Customize_Upload_Control( 
                $wp_customize, 
                'service_image', 
                array(
                    'label'      => __( 'Service main image', 'techflyte' ),
                    'section'    => 'service_image_section',
                    'settings'   => 'service_image',
                ) ) 
                    );
        
          
               $wp_customize->add_control('service_description_controller', array(
                    'label'      => __( 'Main Description', 'techfylte' ),
                    'type'       =>'textarea',
                    'section'    => 'service_description_section',
                    'settings'   => 'service_description',
                    'input_attrs'   => array(
                            'placeholder' => __( 'Service Description', 'techflyte'),   
                        )
                ) );

                $wp_customize->add_control('service_title_two_controller', array(
                    'label'      => __( 'Second Section Title', 'techfylte' ),
                   
                    'section'    => 'service_title_two_section',
                    'settings'   => 'service_title_two',
                    'input_attrs'   => array(
                            'placeholder' => __( 'Title section Two','techflyte'),   
                        )
                ) );

                  $wp_customize->add_control('service_experience_description_controller', array(
                    'label'         => __( 'Experience Description', 'techfylte' ),
                    'type'         =>'textarea',
                    'section'    => 'service_experience_description_section',
                    'settings'   => 'service_experience_description',
                    'input_attrs'   => array(
                            'placeholder' => __( 'Experience Description','techflyte'),   
                        )
                ) );

                 $wp_customize->add_control('service_reputation_description_controller', array(
                    'label'         => __( 'Reputation Description', 'techfylte' ),
                    'type'         =>'textarea',
                    'section'    => 'service_reputation_description_section',
                    'settings'   => 'service_reputation_description',
                    'input_attrs'   => array(
                            'placeholder' => __( 'Reputation Description','techflyte'),   
                        )
                ) );
                
                
                     $wp_customize->add_control('service_price_description_controller', array(
                    'label'         => __( 'Price Description', 'techfylte' ),
                    'type'         =>'textarea',
                    'section'    => 'service_price_description_section',
                    'settings'   => 'service_price_description',
                    'input_attrs'   => array(
                            'placeholder' => __( 'Reputation Description','techflyte'),   
                        )
                ) );

                

                   $wp_customize->add_control('service_description_two_controller', array(
                    'label'         => __( 'Service Description Two', 'techfylte' ),
                    'type'         =>'textarea',
                    'section'    => 'service_description_two_section',
                    'settings'   => 'service_description_two',
                    'input_attrs'   => array(
                            'placeholder' => __( 'Services Description','techflyte'),   
                        )
                ) );
                
                   $wp_customize->add_control('pro_workforce_controller', array(
                    'label'         => __( 'Pro Workforce', 'techfylte' ),
                    'type'         =>'textarea',
                    'section'    => 'pro_workforce_section',
                    'settings'   => 'pro_workforce',
                    'input_attrs'   => array(
                            'placeholder' => __( 'Pro Workforce Description','techflyte'),   
                        )
                ) );