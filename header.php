<?php 
defined('ABSPATH') || exit;
?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <title><?php bloginfo('name');?></title>
  
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet"> -->
    
   
    <?php  wp_head();?>
</head>

<body <?php body_class();?>>
    <div class="wrapper">
        <!-- Header -->
        <header>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-3 col-lg-2 col-md-3 col-sm-3 col-4">
                        <div class="logo">
                          
                          <?php 


                                                $custom_logo_id = get_theme_mod( 'custom_logo' );
                                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                                if ( has_custom_logo() ) {
                                    ?>   
                                 <a href="<?php home_url(); ?>"><img class="img-fluid" src="<?php echo $logo[0];?>" alt="'.get_bloginfo( 'name' ).'"></a>

                                    <?php 
                                                         }
                                 else {
                                        echo '<h1>'. get_bloginfo( 'name' ) .'</h1>';
                                    }


                                
                                            
                                            
                                        
                                    ?>
                                      
                               
                        </div>
                    </div>
                    <div class="col-xl-7 col-lg-8 col-md-7 col-sm-6 col-4 d-flex justify-content-center position-static">
                        <div class="nav-menu d-flex justify-content-start align-items-center">
                            <button class="nav-menu-btn" type="button">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                                <!-- <li><a class="active" href="#">Home</a></li>
                                <li>
                                    <a href="#">About</a>
                                    <ul class="sub-menu">
                                        <li><a href="#">Our Services</a></li>
                                        <li><a href="#">Our Team</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Contractors</a></li>
                                <li><a href="#">Contact</a></li> -->

                                <?php 
                                
                               if(has_nav_menu('primary')){

                                wp_nav_menu(
                                    array(
                                        'theme_location '       =>'primary',
                                        'container'              => '',
                                        'menu_class'             =>'list-unstyled p-0 m-0 d-flex justify-content-start align-items-center',
                                        
                                    )
                                );
                                
                                get_search_form();

                               }
                                ?>
                           
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-2 col-sm-3 col-4 d-flex justify-content-end">
                        <div class="social-menu d-flex">
                                <ul class="list-unstyled p-0 m-0 d-flex justify-content-start align-items-center">


                                        <?php 

                                        $social_url = get_template_directory_uri( ) . '/assets'
                                        ?>
                                    
            
                                        <li><a href="https://www.linkedin.com/in/<?php echo get_theme_mod('linkedin_social_links');?>"><img src=" <?php echo $social_url;?>/images/linkedin-icon.png" alt=""></a></li>
                                        <li><a href="https://www.facebook.com/<?php echo get_theme_mod('facebook_social_links');?>"><img src="<?php echo $social_url;?>/images/fb_icon.png" alt=""></a></li>
                                    
                                </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>