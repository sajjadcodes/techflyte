<?php get_header();?>


  <!-- Header End -->
        <!-- Hero section -->
        <div class="contact-banner inner-page-bnr">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 m-auto">
                        <h2><span><?php _e('SUBMIT','techflyte');?></span> <?php wp_title(" ");?></h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero section End -->
        <!-- Contact section -->
        <div class="contact-us">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="contact-form">
                            <h4><?php _e('Submit your CV', 'techflyte');?></h4>
                            <div class="row">
                                <!-- <div class="col-md-6">
                                    <label>First Name*</label>
                                    <input class="input-field form-control" type="text" name="">
                                </div>
                                <div class="col-md-6">
                                    <label>Last Name*</label>
                                    <input class="input-field form-control" type="text" name="">
                                </div>
                                <div class="col-md-6">
                                    <label>Phone</label>
                                    <input class="input-field form-control" type="text" name="">
                                </div>
                                <div class="col-md-6">
                                    <label>E-mail*</label>
                                    <input class="input-field form-control" type="text" name="">
                                </div>
                                <div class="col-12 text-center">
                                    <button class="form-control m-auto py-0" type="file">Submit CV<input type="file"></button>

                                </div> -->
                                
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