<?php 
get_header();

?>
        <!-- Header End -->
        <!-- Hero section -->
        <div class="banner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-8 col-md-9 col-sm-10 col-11 m-auto">
                        <h1>

                            <?php  echo get_theme_mod('home_title');?> 
                        
                        </h1>
                        <h2><?php echo get_theme_mod('home_subtitle');?></h2>
                        <span><?php echo get_theme_mod('home_description');?></span>
                        <div class="bnr-btns">
                            <a href="https://jobs.techflyte.com/"><?php _e('Jobs','techflyte');?></a>
                            <a href="<?php esc_html_e('services','techflyte');?>"><?php _e('Clients','techflyte');?></a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero section End -->
        <!-- Resume Section -->
        <div class="resume">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h3>
                            <?php echo get_theme_mod('resume_title');?>
                        </h3>
                        
                        <p>
                           <?php echo get_theme_mod('resume_description');?></h3>
                        </p>
                        
                        <!-- <a href="#">Upload Resume <img src="/images/upload-img.png" alt=""></a> -->
                        <?php  echo do_shortcode( '[contact-form-7 id="1516" title="resume_upload"]' ); ?>
                       
                            
                    </div>
                    <div class="col-md-6">
                        <div class="resume-box">
                            
                            <img class="img-fluid" src="<?php echo get_theme_mod('resume_image');?>" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Resume Section End -->
        <!-- Techflyte Section -->
        <div class="techflyte">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-8 col-lg-9 col-md-11 col-sm-10 m-auto">
                        <div class="row">
                            <div class="col-12">
                                <h2><?php echo get_theme_mod('why_title');?></h2>
                                <p> <?php echo get_theme_mod('why_description');?></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="techflyte-box">
                                    <img class="img-fluid m-auto d-block" src="images/benefits-img.png" alt="">
                                    <h4><?php _e('Experience','techflyte'); ?></h4>
                                    <p>
                                        <?php echo get_theme_mod('experience_description');?>
                                    </p>
                                   
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="techflyte-box">
                                    <img class="img-fluid m-auto d-block" src="images/safety-img.png" alt="">
                                    <h4><?php _e('Reputation','techflyte'); ?></h4>
                                    <p>
                                            <?php echo get_theme_mod('reputation_description');?>
                                    </p>
                                   
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="techflyte-box">
                                    <img class="img-fluid m-auto d-block" src="images/comments-img.png" alt="">
                                    <h4><?php _e('Solutions','techflyte'); ?></h4>
                                    <p>
                                         <?php echo get_theme_mod('experience_description');?>
                                    </p>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center">
                                <a class="contract-btn" href="<?php esc_html_e('contact','techflyte');?>"><?php _e('Lets Talk','techflyte');?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Techflyte Section End -->
        <!-- Footer Section -->
      
        <script>
            if ($('#resume-file').val() !== '') {
            e.preventDefault();
            alert('Please upload File');
      } else {
          $("#wpcf7-f1516-o1").submit();
      }
        </script>
        <?php get_footer(); ?>


