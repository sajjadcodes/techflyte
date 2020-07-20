<?php get_header();?>

        <!-- Contact section -->
        <div class="contact-us">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-form">
                            <h4><?php _e('Submit your Resume', 'techflyte');?></h4>
                            <div class="row">
                            
                                
                             <?php echo do_shortcode('[contact-form-7 id="1703" title="submit_resume"]'); ?>
                               
                            </div>
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact section End -->
        <!-- Footer Section -->

       

        <?php get_footer(); ?>