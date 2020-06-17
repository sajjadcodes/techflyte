<?php get_header(); ?> 

<?php $url = get_template_directory_uri(  ).'/assets/';

?>
  <div class="loyalty-banner inner-page-bnr">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 m-auto">
                        <h2><span><?php _e('Loyalty Program','techflyte');?></span></h2>
                    </div>
                </div>
            </div>
        </div>
        <!-- Hero section End -->
        <!-- Loyalty Program section -->
        <div class="loyalty-program">
            <div class="row">
                <div class="col-12">
                    <div class="inner-content-wrap">
                        <h2><?php _e('TechFlyte Loyalty Program ','techflyte');?></h2>
                        <div class="row">
                            <div class="col-lg-7">
                                <h4><?php echo  get_theme_mod('loyalty_subtitle');?></h4>
                                <p>
                                   <?php echo get_theme_mod('loyalty_description'); ?> 
                                </p>
                            </div>
                            <div class="col-lg-5">
                                <div class="program-bnr">
                                    <img class="img-fluid" src="<?php echo get_theme_mod('loyalty_image');?>" alt="">
                                </div>
                            </div>
                        </div>
                        <h5><?php _e('TECH FLYTE BENEFITS DETAIL','techflyte');?></h5>
                        <div class="row justify-content-center">
                            <!-- <div class="col-xl-4 col-sm-6">
                                <div class="benefits-col">
                                    <img class="img-fluid" src="<?php echo $url;?>images/bronze-img.png" alt="">
                                    <h6>BRONZE (2,000 LIFE HOURS COMPLETED)</h6>
                                    <ul>
                                        <li>$400 Bonus</li>
                                        <li>3 Signature lorem ipsum</li>
                                        <li>$100 Safety Award for ZERO Incidents</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="benefits-col">
                                    <img class="img-fluid" src="<?php echo $url;?>images/silver-img.png" alt="">
                                    <h6>SILVER (4,000 LIFE HOURS COMPLETED)</h6>
                                    <ul>
                                        <li>$500 Bonus</li>
                                        <li>5 Signature lorem ipsum</li>
                                        <li>$100 Safety Award for ZERO Incidents</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="benefits-col">
                                    <img class="img-fluid" src="<?php echo $url;?>images/gold-img.png" alt="">
                                    <h6>GOLD (6,000 LIFE HOURS COMPLETED)</h6>
                                    <ul>
                                        <li>$600 Bonus</li>
                                        <li>Signature lorem ipsum</li>
                                        <li>$100 Safety Award for ZERO Incidents</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="benefits-col">
                                    <img class="img-fluid" src="<?php echo $url;?>images/platinum-img.png" alt="">
                                    <h6>Platinum (4,000 LIFE HOURS COMPLETED)</h6>
                                    <ul>
                                        <li>$500 Bonus</li>
                                        <li>5 Signature lorem ipsum</li>
                                        <li>$100 Safety Award for ZERO Incidents</li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="benefits-col">
                                    <img class="img-fluid" src="<?php echo $url;?>images/diamond-img.png" alt="">
                                    <h6>Diamond (6,000 LIFE HOURS COMPLETED)</h6>
                                    <ul>
                                        <li>$600 Bonus</li>
                                        <li>Signature lorem ipsum</li>
                                        <li>$100 Safety Award for ZERO Incidents</li>
                                    </ul>
                                </div>
                            </div> -->
                            <?php get_template_part( 'partials/content','benefits');?>
                            
                        </div>
                        <h4><?php echo get_theme_mod('loyalty_subtitle_two');?></h4>
                        <p>
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, job… and your next!
                        </p>
                        <h4>Third Heading</h4>
                        <p>
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it.
                        </p>
                    </div>
                </div>
            </div>
        </div>



<?php get_footer();?>