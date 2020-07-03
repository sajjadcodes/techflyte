<footer>
            <div class="ftr-main">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="contact-form">
                                <h5><?php _e('CONTACT US','techflyte');?></h5>
                                <?php 
                                echo do_shortcode( '[contact-form-7 id="54" title="footer-contact"]' );
                                ?>
                                <div class="contact-detail">
                                    <div class="d-flex justify-content-start align-items-center mb-4">
                                        <div class="contact-icon">
                                            <?php $social_url = get_template_directory_uri( ) . '/assets' ?>
                                           <img class="img-fluid" src="<?php echo $social_url;?>/images/phone-icon.png" alt=""> 
                                        </div>
                                        <p><?php echo get_theme_mod('footer_contact');?></p>
                                    </div>
                                    <div class="d-flex justify-content-start align-items-center">
                                        <div class="contact-icon">
                                           <img class="img-fluid" src="<?php echo $social_url;?>/images/marker-icon.png" alt=""> 
                                        </div>
                                        <p><?php echo get_theme_mod('footer_address');?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="ftr-right">
                                <div class="social-detail"> 
                                    <div class="row">
                                        <div class="col-md-5">
                                            <label><?php _e('Follow Us','techflyte');?></label>
                                            <ul>
                                                <li><a href="https://www.linkedin.com/in/<?php echo get_theme_mod('footer_linkedin');?>"><img src="<?php echo $social_url;?>/images/linkedin-img.png" alt=""></a></li>
                                                <li><a href="https://www.facebook.com/<?php echo get_theme_mod('footer_facebook');?>"><img src="<?php echo $social_url;?>/images/fb-img.png" alt=""></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-7">
                                            <div class="subscriber">
                                                <label><?php _e('Sign up for our Newslette','techflyte');?></label>
                                                <form class="d-flex justify-content-start align-items-center">
                                                    <input class="input-subscribe" type="text" name="">
                                                    <button class="submit" type="submit"><img src="<?php echo $social_url;?>/images/subscribe-img.png" alt=""></button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ftr-menu">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <h6><?php _e('About','techflyte');?></h6>
                                            <ul>
                                                <li><a href="<?php esc_html_e('team','techflyte');?>"><?php _e('Our Team','techflyte');?></a></li>
                                                <li><a href="<?php esc_html_e('services','techflyte');?>"><?php _e('Our Services','techflyte');?></a></li>
                                                <li><a href="<?php esc_html_e('partner','techflyte');?>"><?php _e('Our Partners','techflyte');?></a></li>
                                            
                                          
                                        
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h6><?php _e('Jobs','techflyte');?></h6>
                                            <ul>
                                                <li><a href="https://jobs.techflyte.com/"><?php _e('Jobs','techflyte');?></a></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-4">
                                            <h6><?php _e('Contractors','techflyte');?></h6>
                                            <ul>
                                            <li><a href="<?php esc_html_e('contractor','techflyte');?>"><?php _e('FAQ','techflyte');?></a></li>
                                                <li><a href="<?php esc_html_e('loyalty','techflyte');?>"><?php _e('Flyers Plus','techflyte');?></a></li>
                                                <li><a href="<?php esc_html_e('safety','techflyte');?>"><?php _e('Safety','techflyte');?></a></li>
                                                 
                                            </ul>
                                        </div>
                                         <div class="row">
                                        
                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-rights">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">
                       
                            <p> <?php _e('Copyright','techflyte');?> &copy;  <?php echo date("Y"); echo " "; echo bloginfo('name'); ?> <?php _e('All Rights Reserved.','techflyte');?></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Footer Section End -->
    </div>
    <?php wp_footer(); ?>
    
</body>

</html>