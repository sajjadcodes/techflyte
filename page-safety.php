<?php get_header(); ?>

<?php $url = get_template_directory_uri(  ).'/assets/'; ?>

 <div class="safety-banner inner-page-bnr">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 m-auto">
                        <h2><span><?php _e('Safety & Compliance','techflyte');?></span></h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero section End -->
        <!-- Safety Compliance section -->
        <div class="safety-compliance loyalty-program">
            <div class="row">
                <div class="col-12">
                    <div class="inner-content-wrap">
                        <h2><?php _e('SAFETY AND COMPLIANCE','techflyte');?></h2>
                        <p>
                            <?php echo get_theme_mod('safety_text_one');?>
                        </p>
                        <div class="row">
                            <div class="col-xl-6 mt-md-4 col-lg-7">
                                <h3><?php echo get_theme_mod('safety_subtitle');?></h3>
                                <p>
                                <?php  echo get_theme_mod('safety_description');?>
                                </p>
                            </div>
                            <div class="col-xl-5 offset-xl-1 col-lg-5">
                                <div class="safety-bnr">
                                    <img class="img-fluid" src="<?php  echo get_theme_mod('safety_image');?>" alt="">
                                </div>
                            </div>
                        </div>
                        
                        <p><?php echo get_theme_mod('safety_description_secondary');?></p>
                    
                    </div>
                </div>
            </div>
        </div>


<?php get_footer();?>