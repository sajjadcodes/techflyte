<?php 

        $wp_customize->add_panel('techflyte_team_panel',array(
        'title'                 => 'Team',
        'Description'           =>'You can customize team like different section Title and subtitle',
        'priority'              =>197,
        ));


        // team_description settings

        $wp_customize->add_setting('team_description', array(

        ));


         $wp_customize->add_setting('approach_description', array(

        ));

         $wp_customize->add_setting('method_description', array(

        ));


        // section
        $wp_customize->add_section( 'team_description_section' , array(
                    'title'         => __( 'Team Description', 'techfylte' ),
                    'priority'      => 170,
                    'panel'         =>'techflyte_team_panel',
                ) );

         $wp_customize->add_section( 'approach_description_section' , array(
                    'title'         => __( 'Approach Description', 'techfylte' ),
                    'priority'      => 172,
                    'panel'         =>'techflyte_team_panel',
                ) );

          $wp_customize->add_section( 'method_description_section' , array(
                    'title'         => __( 'Method Description', 'techfylte' ),
                    'priority'      => 174,
                    'panel'         =>'techflyte_team_panel',
                ) );

        // Controller
     $wp_customize->add_control('team_description_controller', array(
                    'label'      => __( 'Team Description', 'techflyte' ),
                    'type'       =>'textarea',
                    'section'    => 'team_description_section',
                    'settings'   => 'team_description',
                    'input_attrs'   => array(
                            'placeholder' => __( 'Team Description', 'techflyte'),   
                        )
                ) );

    $wp_customize->add_control('approach_description_controller', array(
                    'label'      => __( 'Approach Description', 'techflyte' ),
                    'type'       =>'textarea',
                    'section'    => 'approach_description_section',
                    'settings'   => 'approach_description',
                    'input_attrs'   => array(
                            'placeholder' => __( 'Approach Description', 'techflyte'),   
                        )
                ) );
    $wp_customize->add_control('method_description_controller', array(
                    'label'      => __( 'Method Description', 'techflyte' ),
                    'type'       =>'textarea',
                    'section'    => 'method_description_section',
                    'settings'   => 'method_description',
                    'input_attrs'   => array(
                            'placeholder' => __( 'Method Description', 'techflyte'),   
                        )
                ) );

    