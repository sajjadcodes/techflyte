<?php 

$wp_customize->add_panel('techflyte_header_panel',array(
        'title'             => 'Header Settings',
        'Description'       =>'You can customize header of the theme, like logo, social media url etc',
        'priority'          =>190,
    ));



    // customizer settings
                $wp_customize->add_setting( 'linkedin_social_links' , array(
                    
                ) );
                 $wp_customize->add_setting( 'instagram_social_links' , array(
                    
                ) );
                  $wp_customize->add_setting( 'twitter_social_links' , array(
                    
                ) );
                $wp_customize->add_setting( 'facebook_social_links' , array(
                    
                ) );
              



// customizer sections for social media 
                   


                $wp_customize->add_section( 'header_social_links_section' , array(
                    'title'         => __( 'Social Media Links', 'techfylte' ),
                    'priority'      => 180,
                    'panel'         =>'techflyte_header_panel',
                ) );

                $wp_customize->add_section('title_tagline',array(
                     'title'            =>'Site Identity',
                    'prirority'          =>170,
                     'panel'            =>'techflyte_header_panel',
                   
                )
                        
               );

               $wp_customize->add_section('nav_menus',array(
                     'title'            =>'menu',
                    'prirority'          =>165,
                     'panel'            =>'techflyte_header_panel',
                   
                )
                        
               );


// customizer control for header social media links
                         // Linkedin
                
               $wp_customize->add_control('linkedin_links_controller', array(
                    'label'      => __( 'Linkedin username', 'techfylte' ),
                    'section'    => 'header_social_links_section',
                    'settings'   => 'linkedin_social_links',
                    'input_attrs'   => array(
                            'placeholder' => __( 'username', 'techflyte'),   
                        )
                ) );
                         // Instagram
                $wp_customize->add_control('instragram_links_controller', array(
                    'label'      => __( 'Instagram username', 'techfylte' ),
                    'section'    => 'header_social_links_section',
                    'settings'   => 'instagram_social_links',
                    'input_attrs'   => array(
                            'placeholder' => __( 'username', 'techflyte'),   
                        )
                ) );

                        // twitter
                $wp_customize->add_control('twitter_links_controller', array(
                    'label'      => __( 'Twitter username', 'techfylte' ),
                    'section'    => 'header_social_links_section',
                    'settings'   => 'twitter_social_links',
                    'input_attrs'   => array(
                            'placeholder' => __( 'username', 'techflyte'),   
                        )
                ) );
                         // facebook
                $wp_customize->add_control('facebook_links_controller', array(
                    'label'         => __( 'Facebook username', 'techfylte' ),
                    'section'       => 'header_social_links_section',
                    'settings'      => 'facebook_social_links',
                    'input_attrs'   => array(
                            'placeholder' => __( 'username', 'techflyte'),   
                        )
                ) );
              
