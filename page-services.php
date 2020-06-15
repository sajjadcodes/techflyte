
<?php /* Template Name: Services */ ?>


<?php get_header(); ?>
<?php $img_url = get_template_directory_uri(  ) . "/assets"; ?>
  <!-- Hero section -->
        <div class="service-banner inner-page-bnr">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 m-auto">
                        <h2><?php wp_title(" ");?><span>Us</span></h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero section End -->
        <!-- Techy Difference section -->
        <div class="techy-difference">
            <div class="row align-items-center">
                <div class="col-xl-8 col-lg-7">
                    <div class="sidebar-bnr">
                        <img src="<?php echo get_theme_mod('service_image'); ?>" alt="">
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5">
                    <div class="techy-caption-box">
                        <h3><?php _e('TECHFLYTE','techflyte');?> <span><?php _e('Differnce','techflyte');?></span></h3>
                        <p>
                            <?php echo get_theme_mod('service_description');?>
                        </p>
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- Techy Difference section End -->
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
        <div class="our-services">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xl-7 col-lg-6">
                        <div class="service-detail">
                            <h3><?php wp_title( " " );?></h3>
                            
                            <p>
                            <?php echo get_theme_mod('service_description_two');?>
                            </p>
                            <div class="d-flex align-items-start">
                                <img class="ratio-img" src="<?php echo $img_url;?>/images/ratio-img.png" alt="">
                                <h6>Dolor sit amet, consectetur <span>adipiscing elit, sed do eiusmod tempor incididunt</span> ut labore et dolore</h6>
                            </div>
                        </div>
                        <img class="img-fluid pr-3 pr-lg-0" src="<?php echo $img_url;?>/images/service-img.png" alt="">
                    </div>
                    <div class="col-xl-5 col-lg-6 px-3 px-lg-0">
                        <div class="row">
                            <div class="col-xl-6 col-sm-6">
                                <div class="service-col">
                                    <img src="<?php echo $img_url;?>/images/workforce-img.png" alt="">
                                    <h5><?php _e('Pro Workforce','techflyte');?></h5>
                                    <p>
                                    <?php echo get_theme_mod('pro_workforce');?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-6">
                                <div class="service-col">
                                    <img src="<?php echo $img_url;?>/images/queing-img.png" alt="">
                                    <h5> <?php _e('Beyond Queing','techflyte');?></h5>
                                    <p>
                                    <?php echo get_theme_mod('beyond_queing');?>
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-6">
                                <div class="service-col">
                                    <img src="<?php echo $img_url;?>/images/visitor-img.png" alt="">
                                    <h5><?php _e('Visitor Mangement System','techflyte');?></h5>
                                    <p>
                                        Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    </p>
                                </div>
                            </div>
                            <div class="col-xl-6 col-sm-6">
                                <div class="service-col">
                                    <img src="<?php echo $img_url;?>/images/self-service.png" alt="">
                                    <h5>s<?php _e('Self Service Kisok','techflyte');?></h5>
                                    <p>
                                        Dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our Services section End -->

<?php get_footer(); ?>

