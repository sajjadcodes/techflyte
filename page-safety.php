<?php get_header(); ?>

<?php $url = get_template_directory_uri(  ).'/assets/'; ?>

 <div class="safety-banner inner-page-bnr">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 m-auto">
                        <h2><?php _e('Safety','techflyte');?><span><?php _e('& Compliance','techflyte');?></span></h2>
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
                        <h2><?php _e('TechFlyte Safety and Compliance','techflyte');?></h2>
                        <p>
                            <?php echo get_theme_mod('safety_text_one');?>
                        </p>
                                                
                        <div class="row">
                            <div class="col-xl-6 mt-md-4 col-lg-7">
                                <p><?php  echo get_theme_mod('safety_description');?></p>
                                
                            </div>
                            <div class="col-xl-5 offset-xl-1 col-lg-5">
                                <div class="safety-bnr">
                                 
                                    <?php 
                                                    $video_file = get_template_directory_uri() . "/videos/pepper.mp4";
                                                    echo do_shortcode('[embeddoc url="https://techflyte.com/wp-content/uploads/2020/07/TechFlyte-Drug-and-Alcohol-PP-3.pdf" viewer="browser"]');
                                                ?>
                                </div>
                            </div>
                        </div>
                        <h3><?php echo get_theme_mod('safety_subtitle');?></h3>
                        <p><?php echo get_theme_mod('safety_description_secondary');?></p>
                    
                    </div>
                </div>
            </div>
        </div>


<?php get_footer();?>