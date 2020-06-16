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
         
        // beyond_queing
        $wp_customize->add_setting('beyond_queing', array(

        ));
        // visitor_mangement_system
         $wp_customize->add_setting('visitor_mangement_system', array(

        ));      
        //self_service_kisok
         $wp_customize->add_setting('self_service_kisok', array(

        )); 
        // service_img
         $wp_customize->add_setting('service_img', array(

        )); 


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

        
        $wp_customize->add_section('beyond_queing_section', array(
                'title'                 =>__('Beyond Queing','techflyte'),
                'priority'              =>200,
                'panel'                 =>'techflyte_services_panel',
        ));
        // visitor_mangement_system
         $wp_customize->add_section('visitor_mangement_system_section', array(
                'title'                 =>__('Visitor Mangement System','techflyte'),
                'priority'              =>210,
                'panel'                 =>'techflyte_services_panel',
        ));
        // self_service_kisok
         $wp_customize->add_section('self_service_kisok_section', array(
                'title'                 =>__('Self Service Kisok','techflyte'),
                'priority'              =>220,
                'panel'                 =>'techflyte_services_panel',
        ));
        // service_img
         $wp_customize->add_section('service_img_section', array(
                'title'                 =>__('service image Two ','techflyte'),
                'priority'              =>230,
                'panel'                 =>'techflyte_services_panel',
        ));

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
                    'label'      => __( 'Main Description', 'techflyte' ),
                    'type'       =>'textarea',
                    'section'    => 'service_description_section',
                    'settings'   => 'service_description',
                    'input_attrs'   => array(
                            'placeholder' => __( 'Service Description', 'techflyte'),   
                        )
                ) );

                $wp_customize->add_control('service_title_two_controller', array(
                    'label'      => __( 'Second Section Title', 'techflyte' ),
                   
                    'section'    => 'service_title_two_section',
                    'settings'   => 'service_title_two',
                    'input_attrs'   => array(
                            'placeholder' => __( 'Title section Two','techflyte'),   
                        )
                ) );

                  $wp_customize->add_control('service_experience_description_controller', array(
                    'label'         => __( 'Experience Description', 'techflyte' ),
                    'type'         =>'textarea',
                    'section'    => 'service_experience_description_section',
                    'settings'   => 'service_experience_description',
                    'input_attrs'   => array(
                            'placeholder' => __( 'Experience Description','techflyte'),   
                        )
                ) );

                 $wp_customize->add_control('service_reputation_description_controller', array(
                    'label'         => __( 'Reputation Description', 'techflyte' ),
                    'type'         =>'textarea',
                    'section'    => 'service_reputation_description_section',
                    'settings'   => 'service_reputation_description',
                    'input_attrs'   => array(
                            'placeholder' => __( 'Reputation Description','techflyte'),   
                        )
                ) );
                
                
                     $wp_customize->add_control('service_price_description_controller', array(
                    'label'         => __( 'Price Description', 'techflyte' ),
                    'type'         =>'textarea',
                    'section'    => 'service_price_description_section',
                    'settings'   => 'service_price_description',
                    'input_attrs'   => array(
                            'placeholder' => __( 'Reputation Description','techflyte'),   
                        )
                ) );

                

                   $wp_customize->add_control('service_description_two_controller', array(
                    'label'         => __( 'Service Description Two', 'techflyte' ),
                    'type'         =>'textarea',
                    'section'    => 'service_description_two_section',
                    'settings'   => 'service_description_two',
                    'input_attrs'   => array(
                            'placeholder' => __( 'Services Description','techflyte'),   
                        )
                ) );
                
                   $wp_customize->add_control('pro_workforce_controller', array(
                    'label'         => __( 'Pro Workforce', 'techflyte' ),
                    'type'         =>'textarea',
                    'section'    => 'pro_workforce_section',
                    'settings'   => 'pro_workforce',
                    'input_attrs'   => array(
                            'placeholder' => __( 'Pro Workforce Description','techflyte'),   
                        )
                ) );

                $wp_customize->add_control('beyond_queing_controller', array(
                        'label'                 =>__('Beyond Queing','techflyte'),
                        'type'                  =>'textarea',
                        'section'               =>'beyond_queing_section',
                        'settings'              =>'beyond_queing',
                        'inpute_attrs'          =>array(
                                'placeholder'   =>__('Beyond Queing description','techflyte'),
                        )
                ));
                // visitor_mangement_system
                  $wp_customize->add_control('visitor_mangement_system_controller', array(
                        'label'                 =>__('Visitor Mangement System','techflyte'),
                        'type'                  =>'textarea',
                        'section'               =>'visitor_mangement_system_section',
                        'settings'              =>'visitor_mangement_system',
                        'inpute_attrs'          =>array(
                                'placeholder'   =>__('Visitor Mangement system description','techflyte'),
                        )
                ));

                // self_service_kisok

                $wp_customize->add_control('self_service_kisok_controller', array(
                        'label'                 =>__('Self Service Kisok','techflyte'),
                        'type'                  =>'textarea',
                        'section'               =>'self_service_kisok_section',
                        'settings'              =>'self_service_kisok',
                        'inpute_attrs'          =>array(
                                'placeholder'   =>__('Self Service Kisok description','techflyte'),
                        )
                ));
                // service_img
                $wp_customize->add_control( 
                new WP_Customize_Upload_Control( 
                $wp_customize, 
                'service_img', 
                array(
                    'label'      => __( 'Service secondary image', 'techflyte' ),
                    'section'    => 'service_img_section',
                    'settings'   => 'service_img',
                ) ) 
                    );