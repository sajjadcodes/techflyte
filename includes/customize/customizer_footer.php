<?php 


$wp_customize->add_panel('techflyte_footer_panel',array(
        'title'             => 'TechFlyte Footer Settings',
        'Description'       =>'You can customize footer of the theme, like logo, social media url etc',
        'priority'          =>200,
    ));


		// customizer settings for footer social media links
                $wp_customize->add_setting( 'footer_linkedin' , array(
                    
				) );
				$wp_customize->add_setting( 'footer_twitter' , array(
                    
				) );
				$wp_customize->add_setting( 'footer_instagram' , array(
                    
				) );
					$wp_customize->add_setting( 'footer_facebook' , array(
                    
				) );


		// customizer settings for footer contact and address

				$wp_customize->add_setting( 'footer_contact' , array(
                    
				) );
				$wp_customize->add_setting( 'footer_address' , array(
                    
				) );


			// customizer settings for copyright

		// customizer sections for footer contact us
				$wp_customize->add_section('footer_contacts_details', array(
					'title'					=>__('Contact and Address'),
					'priority'				=>180,
					'panel'					=>'techflyte_footer_panel',
				));



		// section for footer follow us social media links

				 $wp_customize->add_section( 'footer_follow_us' , array(
                    'title'         => __( 'Follow Us', 'techfylte' ),
                    'priority'      => 170,
                    'panel'         =>'techflyte_footer_panel',
				) );
				

		// controller for footer social media links
				  $wp_customize->add_control('footer_linkedin_links_controller', array(
                    'label'      => __( 'Linkedin', 'techfylte' ),
                    'section'    => 'footer_follow_us',
					'settings'   => 'footer_linkedin',
					'input_attrs'   => array(
                            'placeholder' => __( 'username', 'techflyte'),   
                        )
				) );
				
				  $wp_customize->add_control('footer_twitter_links_controller', array(
                    'label'      => __( 'Twitter', 'techfylte' ),
                    'section'    => 'footer_follow_us',
					'settings'   => 'footer_twitter',
					'input_attrs'   => array(
                            'placeholder' => __( 'username', 'techflyte'),   
                        )
				) );
				 $wp_customize->add_control('footer_instagram_links_controller', array(
                    'label'      => __( 'Instagram', 'techfylte' ),
                    'section'    => 'footer_follow_us',
					'settings'   => 'footer_instagram',
					'input_attrs'   => array(
                            'placeholder' => __( 'username', 'techflyte'),   
                        )
				) );

				 $wp_customize->add_control('footer_facebook_links_controller', array(
                    'label'      => __( 'Facebook', 'techfylte' ),
                    'section'    => 'footer_follow_us',
					'settings'   => 'footer_facebook',
					'input_attrs'   => array(
                            'placeholder' => __( 'username', 'techflyte'),   
                        )
				) );

				// controller for footer contact and Address
				  $wp_customize->add_control('footer_contact_controller', array(
                    'label'      => __( 'Contact Number', 'techfylte' ),
                    'section'    => 'footer_contacts_details',
					'settings'   => 'footer_contact',
					'input_attrs'   => array(
                            'placeholder' => __( 'Contact Number', 'techflyte'),   
                        )
				) );
				$wp_customize->add_control('footer_address_controller', array(
                    'label'      => __( 'Address', 'techfylte' ),
                    'section'    => 'footer_contacts_details',
					'settings'   => 'footer_address',
					'input_attrs'   => array(
                            'placeholder' => __( 'Address', 'techflyte'),   
                        )
				) );