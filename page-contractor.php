<?php get_header();?>
<?php $img_url = get_template_directory_uri(  ) . "/assets"; ?>
   <!-- Hero section -->
        <div class="contractor-banner inner-page-bnr">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 m-auto">
                        <h2><span><?php wp_title(" ");?></span></h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero section End -->
        <!-- Contractors section -->
        <div class="contractors">
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-7">
                    <div class="sidebar-bnr">
                        <img src="<?php echo get_theme_mod('contract_image');?>" alt="">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-5">
                    <div class="contractor-caption-box">
                        <h3><?php wp_title(" ");?></h3>
                        <p>
                          <?php echo  get_theme_mod('contract_description');?>
                        </p>
                        <a href="<?php esc_html_e('contact','techflyte');?>"><?php _e('Contact','techflyte');?></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contractors section End -->
 
       <!-- Staff Firm section -->
        <div class="staff-firm">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2>
                            <?php echo get_theme_mod('service_title_two');?>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="firm-col">
                            <div class="firm-col-head d-flex align-items-baseline justify-content-start">
                                <h4><?php _e('1','techflyte');?></h4>
                                <span><?php _e('Experience','techflyte');?></span>
                                <img class="img-fluid" src="<?php echo $img_url;?>/images/experience-img.png" alt="">
                            </div>
                            <p>
                            <?php echo  get_theme_mod('service_experience_description');?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="firm-col">
                            <div class="firm-col-head d-flex align-items-baseline justify-content-start">
                                <h4><?php _e('2','techflyte');?></h4>
                                <span><?php _e('Reputation','techflyte');?></span>
                                <img class="img-fluid" src="<?php echo $img_url;?>/images/reputation-img.png" alt="">
                            </div>
                            <p>
                            <?php echo  get_theme_mod('service_reputation_description');?>
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="firm-col">
                            <div class="firm-col-head d-flex align-items-baseline justify-content-start">
                                <h4><?php _e('3','techflyte');?></h4>
                                <span><?php _e('Price','techflyte');?></span>
                                <img class="img-fluid" src="<?php echo $img_url;?>/images/price-img.png" alt="">
                            </div>
                            <p>
                            <?php echo  get_theme_mod('service_price_description');?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Staff Firm section End -->
        <!-- Our Services section -->
       
        <!-- Our Services section End -->




        <!-- Information section -->
        <div class="information">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 text-center">
                        <h6><?php _e('INFORMATION','techfyte');?></h6>
                        <h2>
                            <?php _e('FREQUENTLY ASKED QUESTIONS','techflyte');?>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="accordion row" id="accordionExample">
                    <?php get_template_part( 'partials/content','faq');?>
                    </div>
                </div>
            </div>
        </div>
</div>
</div>
        <!-- Information section End -->


<?php get_footer();?>